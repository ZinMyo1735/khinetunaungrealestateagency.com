<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;            // import Auth

use App\Models\Property;                        // import Property Model

class AuthController extends Controller
{
    // direct login page
    public function loginPage() {
        return view('login');
    }

    // direct register page
    // public function registerPage() {
    //     return view('register');
    // }

    // admin dashboard
    public function dashboard() {
        $properties = Property::orderBy('id','desc')->paginate(6);

        return view('admin.dashboard',compact('properties'));
    }
}
