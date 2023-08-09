<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class EmailController extends Controller
{
    public function getEmail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
        ]);

        $email = $request->email;
        $token = Str::random(60);

        Mail::to($email)->send(new SendEmail($token));

        return redirect()->back()->with('message', 'Password reset link has been sent to your email.');
    }
}
