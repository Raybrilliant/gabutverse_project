<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin/login');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $login = Admin::where('email',$email)->first();
        if ($password != $login->password || !$login->password) {
            return back()->with('error','Kamu bukan admin');
        }

        $request->session()->put('active',$login->id);
        return redirect('admin');
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        setcookie('id','',time()-7200);
        return redirect('admin');
    }
}
