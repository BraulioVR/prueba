<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function mostrarDivision(Request $request){
        $request->validate([
            'numero1'=>'required',
            'numero2'=>'required'
        ]);
        $elemento1=$request->numero1;
        $elemento2=$request->numero2;

        return redirect()->route('division')->with('success', 'La Division da : '.$elemento1/$elemento2);
    }
    public function vistaDivision(){
        return view('division');
    }
}
