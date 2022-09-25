<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumaController extends Controller
{
    public function mostrarSuma(Request $request){
        $request->validate([
            'numero1'=>'required',
            'numero2'=>'required'
        ]);
        $elemento1=$request->numero1;
        $elemento2=$request->numero2;

        return redirect()->route('suma')->with('success', 'La Suma da : '.$elemento1+$elemento2);
    }

    public function vistaSuma(){
        return view('suma');
    }
}
