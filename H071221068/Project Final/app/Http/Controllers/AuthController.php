<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Hash;
use App\Models\user;
use App\Mail\ForgotPasswordMail;
use Mail;
use Str;

class AuthController extends Controller
{
    public function login()
    
    {
        if(!empty(Auth::check()))
        {
            if(Auth::user()->role == 1)
            {
                return redirect('admin/dashboard');
            }
            else if(Auth::user()->role == 2)
            {
                return redirect('teacher/dashboard');
            }
            else if(Auth::user()->role == 3)
            {
                return redirect('frontend/home');
            }
        }
        return view('auth.login');
    }

    public function AuthLogin(Request $request)
    {
        $remember = !empty($request->remember) ? true : false;

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], true))
        {
            if(Auth::user()->role == 1)
            {
                return redirect('admin/dashboard');
            }
            else if(Auth::user()->role == 2)
            {
                return redirect('teacher/dashboard');
            }
            else if(Auth::user()->role == 3)
            {
                return redirect('frontend/home');
            }
            
        }
        else
        {
            return redirect()->back()->with('error','Silahkan masukkan email dan password yang benar');
        }
    }

    public function forgotpassword()
    {
        return view('auth.forgot');
    }

    public function PostForgotPassword(Request $request)
    {
       $user = User::getEmailSingle($request->email) ;
       if(!empty($user))
       {
           $user->remember_token = Str::random(30);
           $user->save();
           Mail::to($user->email)->send(new ForgotPasswordMail($user));

           return redirect()->back()->with("success", "Silahkan Cek Email dan Reset Password");
       }
       else
       {
            return redirect()->back()->with("error", "Email tidak ditemukan");
       }
    }

    public function reset($remember_token)
    {
        $user = User::getTokenSingle($remember_token);
        if(!empty($user))
        {
            $data['user'] = $user;
            return view('auth.reset',$data);
        }
        else
        {
            abort(404);
        }
     
    }

    public function PostReset($token, Request $request) 
    {
        if($request->password == $request->cpassword)
        {
            $user = User::getTokenSingle($token);
            $user->password = Hash::make($request->password);
            $user->remember_token = Str::random(30);
            $user->save();

            return redirect(url('login'))->with('success', "Password berhasil direset");
        }
        else
        {
            return redirect()->back()->with("error", "Password dan Confirm Password tidak sama");
        }

    }
        
    public function createakun()
    {
        return view('auth.create');
    }

    public function insert(Request $request)
    {
       $user = new User;
       $user->name = trim($request->name);
       $user->email = trim($request->email);
       $user->password = Hash::make($request->password);
       $user->role = $request->role;
       $user->save();

       return redirect(url('login'))->with('success','Akun Anda berhasil dibuat');
    }

    public function logout()
    {
        Auth::logout();
        return redirect(url('login'));
    }
}
