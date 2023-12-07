<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use Hash;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function change_password()
    {
        $data['header_title'] = "Change Password";
        return view('admin.profile.change_password', $data);
    }

    public function update_change_password(Request $request)
    {
        $user = User::getSingle(Auth::user()->id);
        if(Hash::check($request->old_password, $user->password))
        {
            $user->password = Hash::make($request->new_password);
            $user-> save();
            return redirect()->back()->with('success', "Password berhasil diupdate");
                
        }
        else
        {
            return redirect()->back()->with('error', "Password lama tidak sesuai");
        }
    }

    
}
