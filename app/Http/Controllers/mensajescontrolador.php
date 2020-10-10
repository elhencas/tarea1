<?php

namespace App\Http\Controllers;



class mensajescontrolador extends Controller
{
    //
    public function store()
    {


        request()->validate([
            'name'=>'required',
            'email'=>'required'
        ]);

        return ('Datos validados');
    }
}
