<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use App\Models\Book;
use App\Models\Lending;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\User;

class LendingController extends Controller
{
    public function index()
    {
        $lendings = Lending::where('user_id', auth()->user()->id)
            ->orderBy('lending_date', 'desc')
            ->paginate(5);
        return view('frontend.lendings.index', compact('lendings'));
    }
    public function store(Request $request)
    {
        try {
            $book = Book::find(decodeId($request->book_id));
            if (!$book) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Buku tidak ditemukan',
                ]);
            }

            if ($book->quantity < 1) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Stok buku habis',
                ]);
            }

            DB::beginTransaction();
            $request->validate([
                'book_id' => 'required',
                'return_date' => 'required',
            ]);

            if ($this->checkLendingLimit()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Anda telah mencapai batas peminjaman',
                ]);
            }

            Lending::create([
                'book_id' => $book->id,
                'user_id' => auth()->user()->id,
                'lending_date' => Carbon::now(),
                'return_date' => $request->return_date,
            ]);

            $book->quantity = $book->quantity - 1;
            $book->save();

            $user = User::find(auth()->user()->id);
            $user->lending_count = $user->lending_count + 1;
            $user->save();

            DB::commit();
            return response()->json([
                'status' => 'success',
                'message' => 'Peminjaman berhasil',
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => 'error',
                'message' => 'Peminjaman gagal',
            ]);
        }
    }

    private function checkLendingLimit()
    {
        $user = auth()->user();
        $lendingLimit = 0;

        if ($user->role == 'lecturer') {
            $lendingLimit = 12;

            $lendings = Lending::where('user_id', $user->id)
                ->where('status', 'lent')
                ->where('lending_date', '>=', Carbon::now()->subWeeks(2))
                ->count();
            return $lendings >= $lendingLimit;
        } elseif ($user->role == 'staff') {
            $lendingLimit = 8;

            $lendings = Lending::where('user_id', $user->id)
                ->where('status', 'lent')
                ->where('lending_date', '>=', Carbon::now()->subWeeks(2))
                ->count();

            return $lendings >= $lendingLimit;
        } elseif ($user->role == 'student') {
            $lendingLimit = 4;

            $lendings = Lending::where('user_id', $user->id)
                ->where('status', 'lent')
                ->where('lending_date', '>=', Carbon::now()->subWeeks(1))
                ->count();

            return $lendings >= $lendingLimit;
        }
    }
}
