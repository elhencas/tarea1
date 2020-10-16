<?php

namespace App\Http\Controllers;

use App\Mail\MensajeRecibido;

use Illuminate\support\facades\Mail;


class mensajescontrolador extends Controller
{
    //
    public function store()
    {


        request()->validate([
            'name'=>'required',
            'email'=>'required'
        ]);

        /// enviar el email

            Mail::to('henrycastropz@gmail.com')->send(new MensajeRecibido);

        return ('Datos validados');
    }
}

