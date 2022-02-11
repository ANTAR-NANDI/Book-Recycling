<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;
use App\Models\User;

class AdminController extends Controller
{
    public function update_data(Request $request, $id)
    {
        //dd($request);
        $obj = User::find($id);
        // $user_id=Session::get('userid');
        $obj->firstname = $request->firstname;
        $obj->lastname = $request->lastname;
        $obj->email = $request->email;
        $obj->mobile = $request->mobile;
        
        if ($obj->save()) {

            return redirect()->to('admin/profile');
        }
    }
    public function update_password(Request $request, $id)
    {
        //dd($request);
        $obj = User::find($id);
        $old_password =$request->old_password;
        $new_password = $request->new_password;
        $renew_password = $request->renew_password;
        if($old_password != $obj->password)
        {
            return redirect()->back()->with('error_message', 'Old Password Not Mathed!');
        }
        else if($new_password != $renew_password)
        {
            return redirect()->back()->with('error_message', 'New password and Confrim password not matched');
        }
        else{
            $obj->password = $request->renew_password;
            if ($obj->save()) {
                return redirect()->to('admin/profile')->with('message', 'Updated Successfully!');
            }
        }
        
    }
    
    public function Profile()
    {
        $user_id = Session::get('userid');
        $data = User::where('id', '=', $user_id)
          ->get();
       // dd($data);
        return view('Admin.pages.profile',['data' => $data]);
    }
    public function user_list()
    {
        
        $users = User::where('role', '=', 'user')
            ->get();
       // return view('Admin.pages.user-list', ['users' => $users]);
        $now  = Carbon::now();
        $end  = $users[0]['updated_at'];


        // show difference in days between now and end dates
        $test = $now->diffInDays($end);
        dd($now);
    }
    public function block_user()
    {
        return view('Admin.pages.block-user');
    }
    public function books_list()
    {
        $users = User::where('role', '=', 'user')
        ->get();
        return view('Admin.pages.books-list', ['users' => $users]);
    }
    public function manage_post()
    {
        return view('Admin.pages.manage-posts');
    }
    public function messages()
    {
        return view('Admin.pages.messages');
    }
    public function report_user()
    {
        return view('Admin.pages.report-user');
    }
    public function total_sales()
    {
        return view('Admin.pages.total-sales');
    }
    public function index()
    {
        return view('Admin.pages.index');
    }
}
