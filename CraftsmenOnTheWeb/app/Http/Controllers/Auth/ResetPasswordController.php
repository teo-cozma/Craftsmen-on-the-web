<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use App\Models\User;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    // public function passwordRequestForm()
    // {
    //     // return view('auth.passwords.email');

    //     $user = db::table('users')->where('email', '=', $request->email)->first();

    //     // If user exists
    //     if(count($user) < i) {
    //         return redirect()->back()->withErrors(['email' => trans('User does not exist')]);
    //     }
    // }

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    // protected function redirectTo() {
    //     if(Auth()->user()->role == 1) {
    //         return route('login');
    //     }
    //     elseif(Auth()->user()->role == 2) {
    //         return route('home');
    //     }
    // }
}
