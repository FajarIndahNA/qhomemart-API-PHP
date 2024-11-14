<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function store(Request $request){
        $validate =$request->validate(
            [
            'pesan' => 'required|string|max:255',
            ]
        );

        return response()->json([
            'status' => 'succes',
            'message' => 'Pesan berhasil disimpan',
            'data' => [
                'pesan' =>$validate['pesan'],
            ]
            ]);
        
            return redirect()->back()->with('success', 'Pesan berhasil disimpan: ' . $validated['pesan']);
    }
}
