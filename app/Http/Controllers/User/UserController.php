<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('User.pages.index');
    }
    public function about_us()
    {
        return view('User.pages.about');
    }
    public function contact_us()
    {
        return view('User.pages.contact');
    }

    public function shop()
    {
        return view('User.pages.shop');
    }
    public function register()
    {
        return view('User.pages.register');
    }
    public function login()
    {
        return view('User.pages.login');
    }

    public function productdetails()
    {
        return view('User.pages.product_details');
    }
}
