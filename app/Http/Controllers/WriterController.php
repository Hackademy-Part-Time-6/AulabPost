<?php

namespace App\Http\Controllers;

use App\Mail\CareerRequestMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class WriterController extends Controller
{
    //
    public function becomeWriter() {
        Mail::to('admin@theaulabpost.es')->send(new CareerRequestMail(Auth::user()));
        return redirect()->route('welcome')->withMessage(['type'=>'success','text'=>'Solicitud enviada con éxito, pronto sabrás algo, gracias!']);
    }

    public function makeWriter(User $user) {
        Artisan::call('nombre_database:make-user-writer',['email'=>$user->email]);
        return redirect()->route('welcome')->withMessage(['type'=>'success','text'=>'Ya tenemos un colaborador más']);
    }
}
