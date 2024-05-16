<?php

use App\Models\Book;
use App\Models\Setting;
use Illuminate\Support\Str;
use Vinkla\Hashids\Facades\Hashids;

if (!function_exists('generateRandom')) {
    function generateRandom($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}

if (!function_exists('encodeId')) {
    function encodeId($id)
    {
        return Hashids::encode($id);
    }
}

if (!function_exists('decodeId')) {
    function decodeId($hashId)
    {
        if (empty($hashId)) return null;

        return Hashids::decode($hashId)[0] ?? null;
    }
}

if (!function_exists('generateCode')) {
    function generateCode($book, $lastId, $idx)
    {
        $year = date('Y');
        // only use 2 digits
        $year = substr($year, -2);
        $lastId = $lastId + 1;

        return $year . "." . sprintf('%02s', $lastId) . "." . sprintf('%02s', $idx);
    }
}

if (!function_exists('generateSlug')) {
    function generateSlug($title)
    {
        return Str::slug($title, '-');
    }
}