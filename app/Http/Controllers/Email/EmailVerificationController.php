<?php

namespace App\Http\Controllers\Email;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class EmailVerificationController extends Controller
{
    public function notice () {
        $isEmailVerified = Auth::user()->email_verified_at;
            if(is_null($isEmailVerified)){
                return view('auth.verify');
            }
            else{
                return redirect('/freelancer/register');
            }
    }

    public function verify (EmailVerificationRequest $request) {
        $request->fulfill();
        return redirect('/freelancer/register');
    }

    public function resend (Request $request) {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('message', 'Verification link sent!');
    }
}

