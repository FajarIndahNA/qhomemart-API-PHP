<?php

namespace App\Http\Controllers;

use App\Models\PersegiPanjang;
use Illuminate\Http\Request;

class PersegiPanjangController extends Controller
{
    public function store(Request $request){
        $validated = $request->validate(
            [
                'panjang' => 'required|numeric',
                'lebar' => 'required|numeric',
            ]);

        $persegipanjang = PersegiPanjang::create([
            'panjang' => $validated['panjang'],
            'lebar' => $validated['lebar'],
        ]);

        $luas = $persegipanjang->panjang* $persegipanjang->lebar;

        return response()->json(
            [
                
                'panjang' => $persegipanjang -> panjang,
                'lebar' =>$persegipanjang->lebar,
                'luas' =>$luas,
            ]);
    }

    public function create(){
        return view('persegipanjang.create');
    }
}
