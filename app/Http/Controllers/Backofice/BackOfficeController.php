<?php

namespace App\Http\Controllers\Backofice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    public function index()
    {
        return view('User-Backoffice.pages.index');
    }
    public function about_us()
    {
        return view('User-Backoffice.pages.about');
    }
    public function contact_us()
    {
        return view('User-Backoffice.pages.contact');
    }

    public function shop()
    {
        return view('User-Backoffice.pages.shop');
    }
    public function register()
    {
        return view('User-Backoffice.pages.register');
    }
    public function login()
    {
        return view('User-Backoffice.pages.login');
    }
}
