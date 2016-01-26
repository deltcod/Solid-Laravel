<?php

namespace App\Http\Controllers;

use App\Http\Flash;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ContactEmailController extends Controller
{
    public function send(Request $request)
    {
        //dd(Input::all());

        //TODO: SEND EMAIL
        //this->email->send();

        //FLASH NOTIFICATION
        $request->session()->flash(
            'flash_message',
            'Sent email correctly!'
        );

//        $flash = app('\App\Http\Flash');
//
//        $flash->message("Ok!");

        //REDIRECT WELCOME
        return redirect()->route('welcome');
    }
}
