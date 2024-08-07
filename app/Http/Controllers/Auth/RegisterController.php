<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'captcha' => ['required', 'captcha'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role']
        ]);
    }

    public function registered(Request $request, $user){

        $isEmailVerified = Auth::user()->email_verified_at;
        if(is_null($isEmailVerified)){
            return redirect()->route('verification.notice')->with('message', ' Please check your email account and verify your account to access all .');
        }
        else{
            return redirect('/freelancer/register')->with('message', 'Login successful!');
        }

        if(auth()->user()->role=="1"){
            return redirect("/admin/dashboard");
        }
        else if(auth()->user()->role=="2"){
            return redirect('/register/partner');
        }
        else if(auth()->user()->role=="3")
        {
            return redirect("/seeker/register");
        }
        else
        {
            return redirect("/freelancer/register");
        }
    }
    public function get_new_captcha()
    {
        return response()->json(['captcha' => captcha_img()]);
    }
}
