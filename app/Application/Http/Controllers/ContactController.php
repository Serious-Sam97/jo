<?php

namespace App\Application\Http\Controllers;

use App\Mail\SendMessageMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendMail(Request $request)
    {
        Mail::to('samzuckerberg.jar@gmail.com')->send(new SendMessageMail($request->message, $request->mail, $request->subject, $request->name));
    }
}
