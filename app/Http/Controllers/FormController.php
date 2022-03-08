<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function input()
    {
        return view('input');
    }
 
    public function proses(Request $request)
    {
        $this->validate($request,[
            'nama' => ['required', 'min:6', 'max:20'],
            'pekerjaan' => ['required','min:2'],
            'usia' => ['required', 'numeric']
       ]);
 		
        return view('proses',['data' => $request]);
    }
}
