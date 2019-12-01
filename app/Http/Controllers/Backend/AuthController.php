<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use AuthenticatesUsers;

     protected $redirectTo = '/dashboard';

//     public function __construct()
//     {
//         $this->middleware('guest:admin')->except('logout');
//     }


    public function showLogin(){
        return view('backend.auth.index');
    }

    public function loginProcess(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::guard('web')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            return redirect()->intended(route('dashboard'));
        }
        return back()->withInput($request->only('email', 'remember'));
    }
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        Toastr::success('Successfully logout', 'Logout', ["positionClass" => "toast-top-center"]);
        return redirect()->route('backend.login.get');
    }

}
