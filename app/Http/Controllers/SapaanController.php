<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SapaanController extends Controller
{
    // menampilkan form nama
    public function showForm()
    {
        return view('sapaan.index');
    }

    public function greetUser(Request $request)
    {
        // get name
        $name = $request->input('nama');

        // cek
        if($name){
            return response()->json([
                'message' => 'Hello,' .$name. '! selamat datang di API.'
            ]);
        }

        // no name
        return response()->json(
            [
                'massage' => 'Hello! Mohon maaf, anda belum memasukkan nama anda.'
            ]
            );
    }
}
