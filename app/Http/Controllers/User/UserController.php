<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\User\StoreUserRequest;
use App\Models\User;
use Carbon\Carbon;

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

    public function registerstore(StoreUserRequest $request)
    {
        $obj = new User();
        $obj->firstname = $request->firstname;
        $obj->lastname = $request->lastname;
        $obj->email = $request->email;
        $obj->reg_date = Carbon::now();
        $obj->password = md5($request->password);
        $obj->mobile = $request->mobile;
        $obj->active = 1;
        $obj->ispaid = 1;

        if ($obj->save()) {
            return redirect()->back()->with('message', 'Thanks for Registration!');
            // return back()->with($notification);
        }
    }
}
