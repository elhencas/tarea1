<?php

namespace App\Http\Controllers;

use App\Mail\MensajeRecibido;

use Illuminate\support\facades\Mail;


class mensajescontrolador extends Controller
{
    //
    public function store()
    {


        $msg=request()->validate([
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'content'=>'required'
        ]);

        /// enviar el email

            Mail::to('henrycastropz@gmail.com')->queue(new MensajeRecibido($msg));

        return 'Mensaje enviado';
    }
}

