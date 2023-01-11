<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function adminDash()
    {
        return view('admin.index');
    
    }

//logout

public function AdminLogin(){
    return view('admin.admin_login');
} // End Mehtod 


public function AdminDestroy(Request $request){
    Auth::guard('web')->logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/admin/login');
} // End Mehtod 



}
