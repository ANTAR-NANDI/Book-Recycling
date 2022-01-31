<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\StoreContactRequest;
use App\Models\User;
use App\Models\Contact;
use Carbon\Carbon;
use Session;

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
        $obj->role = "user";
        if ($obj->save()) {
            return redirect()->back()->with('message', 'Thanks for Registration!');
            // return back()->with($notification);
        }
    }
    public function loginstore(Request $request)
    {
        //dd($request);
        $email = $request->email;
        $password = $request->password;

        //dd($request);
        $obj = User::where('email', '=', $email)
            ->where('password', '=', $password)
            ->first();
        //dd($obj);
        if ($obj) {
           // dd($obj);
            $request->session()->put('userid', $obj->id);
            $request->session()->put('firstname', $obj->firstname);
            $request->session()->put('lastname', $obj->lastname);
            $request->session()->put('userrole', $obj->role);

            if ($request->session()->get('userrole') == 'user') {
                // dd('Admin');
                //return redirect()->to('Admin/home');
                return redirect('backoffice/home')->with('loggedin', 'Successfully Loggedin');
            } else if ($request->session()->get('userrole') == 'admin') {
                // dd('Requestor');
                return redirect('admin/home')->with('loggedin', 'Successfully Loggedin');
                //  return redirect()->to('Requestor/home');
            }
        } else {
            return redirect()->back()->with('invalidlogin', "Invalid Email or Password");
        }
    }
    public function logout()
    {
        Session::flush();
        return redirect()->to('/');
    }
    public function contactstore(StoreContactRequest $request)
    {
        $obj = new Contact();
        $obj->email = $request->email;
        $obj->mobile = $request->mobile;
        $obj->message = $request->message;
        $obj->reg_date = Carbon::now();
        if ($obj->save()) {
            return redirect()->back()->with('message', 'Thanks for Contact Us!');
            // return back()->with($notification);
        } else {
            return redirect()->back()->with('message', 'Contact us Failed!');
        }
    }
}
