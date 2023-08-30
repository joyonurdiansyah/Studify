<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/karyawan-dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string|min:6',
        ]);

        $login = [
            'email' => $request->email,
            'password' => $request->password
        ];

        //LAKUKAN LOGIN
        if (auth()->attempt($login)) {
            //JIKA BERHASIL, MAKA REDIRECT KE HALAMAN HOME
            return redirect()->route('data.karyawan.dashboard');
        }
        //JIKA SALAH, MAKA KEMBALI KE LOGIN DAN TAMPILKAN NOTIFIKASI
        return redirect()->route('login')->with(['error' => 'Email/Password salah!']);
    }
}
