<?php

namespace App\Http\Controllers;

use App\Traits\Upload;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;



class AuthController extends Controller
{
    use Upload;

    public function index()
    {
        return view('auth.login');
    }

    // public function login(Request $request)
    // {
    //     if ($request->isMethod('post')) {
    //         $validator = Validator::make($request->all(), [
    //             'id_member' => 'required|exists:users,id_member',
    //             'password' => 'required'
    //         ], []);

    //         if ($validator->fails()) {
    //             return redirect()->back()->with('error', $validator->errors()->first());
    //         }

    //         $credentials = $request->only('id_member', 'password');

    //         if (Auth::attempt($credentials, $request->has('remember'))) {
    //             if (auth()->user()->hasRole('admin')) {
    //                 return redirect()->intended('/backend/dashboard');
    //             }
    //             return redirect()->intended('/');
    //         } else {
    //             return redirect()->back()->with('error', 'Invalid username or password.');
    //         }
    //     }
    // }

    public function login(Request $request)
    {
        // check from table users if username and password is valid
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        // if valid first check from table users or then check from api
        $user = Auth::attempt([
            'id_member' => $request->username,
            'password' => $request->password
        ], $request->has('remember'));

        if ($user) {
            return redirect()->intended('/');
        }

        // dd($request->all());
        // if not valid from table users then check from api
        $client = new Client([
            'base_uri' => 'https://cis-dev.del.ac.id/api/'
        ]);
        $res = $client->request('POST', 'jwt-api/do-auth', [
            'form_params' => [
                'username' => $request->username,
                'password' => $request->password,
            ]
        ]);
        $response = json_decode($res->getBody());

        if ($response->result) {
            $detailUser = null;
            $headers = [
                'Authorization' => 'Bearer ' . $response->token,
                'Accept'        => 'application/json',
            ];

            if ($response->user->role == 'Mahasiswa') {
                $detailUser = $client->request('GET', 'library-api/mahasiswa?userid=' . $response->user->user_id, [
                    'headers' => $headers
                ]);

                $userData = json_decode($detailUser->getBody());

                // if user not exist then create user
                $userExist = User::where('id_member', $userData->data->mahasiswa[0]->nim)->first();
                if (!$userExist) {
                    // add data to table users
                    $user = User::create([
                        'name' => $userData->data->mahasiswa[0]->nama,
                        'id_member' => $userData->data->mahasiswa[0]->nim,
                        'email' => $userData->data->mahasiswa[0]->email,
                        // check if hp key exist or not
                        'phone' => isset($userData->data->mahasiswa[0]->hp) ? $userData->data->mahasiswa[0]->hp : null,
                        'major' => $userData->data->mahasiswa[0]->prodi_name,
                        'password' => bcrypt($request->password),
                        'lending_limit' => 4,
                    ]);

                    $user->assignRole('Mahasiswa');
                }

                // if user exist then login
                $user = User::where('id_member', $userData->data->mahasiswa[0]->nim)->first();

                Auth::login($user);
            }
            if ($response->user->role == 'Dosen' || $response->user->role == 'Pustakawan') {
                $detailUser = $client->request('GET', 'library-api/pegawai?userid=' . $response->user->user_id, [
                    'headers' => $headers
                ]);

                $userData = json_decode($detailUser->getBody());
                // if user not exist then create user
                $userExist = User::where('id_member', $userData->data->pegawai[0]->nip)->first();
                if (!$userExist) {
                    $user = User::create([
                        'name' => $userData->data->pegawai[0]->nama,
                        'id_member' => $userData->data->pegawai[0]->nip,
                        'email' => $userData->data->pegawai[0]->email,
                        'phone' => isset($userData->data->pegawai[0]->hp) ? $userData->data->pegawai[0]->hp : null,
                        'password' => bcrypt($request->password),
                        'lending_limit' => 7,
                    ]);

                    $user->assignRole($response->user->role);
                }

                // if user exist then login
                $user = User::where('id_member', $userData->data->pegawai[0]->nip)->first();
                Auth::login($user);
            }

            if ($response->user->role == 'Pustakawan') {
                return redirect('/backend/dashboard');
            } else {
                return redirect('/');
            }
        } else {
            return redirect()->back()->with('error', 'Invalid username or password');
        }
    }


    public function logout()
    {
        // clear session instance
        session()->forget('instance_id');
        auth()->logout();

        return redirect('/');
    }

    public function uploadImage()
    {
        try {
            if (request()->hasFile('image')) {
                $imageUrl = $this->uploadFile("image", 'gambarPage');
                if ($imageUrl) {
                    return response()->json(['status' => 1, 'path' => $imageUrl], 200);
                } else {
                    return response()->json(['status' => 0, 'errors' => 'Failed to upload image.'], 400);
                }
            } else {
                return response()->json(['status' => 0, 'errors' => 'Image not found.'], 400);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 0, 'errors' => 'Unexpected error!'], 400);
        }
    }

    public function deleteImage()
    {
        try {
            $path = request()->path;
            $path = str_replace(asset('/'), '', $path);
            if (file_exists($path)) {
                unlink($path);
                return response()->json(['status' => 1, 'message' => 'Image deleted successfully.'], 200);
            } else {
                return response()->json(['status' => 0, 'errors' => 'Image not found.'], 200);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 0, 'errors' => 'Unexpected error!'], 400);
        }
    }

    public function username()
    {
        $field = (filter_var(request()->email, FILTER_VALIDATE_EMAIL) || !request()->email) ? 'email' : 'username';
        request()->merge([$field => request()->email]);
        return $field;
    }
}
