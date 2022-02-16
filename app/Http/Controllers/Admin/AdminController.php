<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Message;
use App\Models\Contact;
use App\Models\Category;

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
        $old_password = $request->old_password;
        $new_password = $request->new_password;
        $renew_password = $request->renew_password;
        if ($old_password != $obj->password) {
            return redirect()->back()->with('error_message', 'Old Password Not Mathed!');
        } else if ($new_password != $renew_password) {
            return redirect()->back()->with('error_message', 'New password and Confrim password not matched');
        } else {
            $obj->password = $request->renew_password;
            if ($obj->save()) {
                return redirect()->to('admin/profile')->with('message', 'Updated Successfully!');
            }
        }
    }
    public function send_notice(Request $request, $id)
    {
        $sender = Session::get('userid');
        $obj = new Message();
        $obj->sender_user_id = $sender;
        $obj->receiver_user_id = $id;
        $obj->message = $request->message;
        if ($obj->save()) {

            return redirect()->to('admin/report-user');
        }
    }

    public function Profile()
    {
        $user_id = Session::get('userid');
        $data = User::where('id', '=', $user_id)
            ->get();
        // dd($data);
        return view('Admin.pages.profile', ['data' => $data]);
    }
    public function user_list()
    {

        $users = User::where('role', '=', 'user')
            ->get();
        return view('Admin.pages.user-list', ['users' => $users]);
    }
    public function delete_user($id)
    {
        $obj = User::find($id);
        if ($obj->delete()) {
            return redirect()->to('admin/user-list');
        }
    }

    public function block_user()
    {
        $reg_date = Carbon::now();
        $users = User::where('role', '=', 'user')
            ->where('isactive', '=', 1)
            ->where('expired_date', '<', Carbon::now())
            ->get();
        // dd($users);
        return view('Admin.pages.block-user', ['users' => $users]);
    }
    public function update_block_user($id)
    {
        $obj = User::find($id);
        $obj->isactive = 0;
        if ($obj->save()) {
            return redirect()->to('admin/block-user')->with('message', 'Updated Successfully!');
        }
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

        $messages = Contact::all();
        return view('Admin.pages.messages', ['messages' => $messages]);
    }
    public function report_user()
    {
        $users = DB::table('reports')
            ->leftjoin('users', 'users.id', '=', 'reports.reporter_user_id')
            ->where('isactive', '=', 1)
            ->get();
        $users2 = User::where('role', '=', 'user')
            ->get();

        // exit();
        return view('Admin.pages.report-user', ['users' => $users, 'users2' => $users2]);
    }
    public function total_sales()
    {
        return view('Admin.pages.total-sales');
    }
    public function index()
    {
        return view('Admin.pages.index');
    }
    public function add_category()
    {
        return view('Admin.pages.addcategory');
    }
    public function Category_Store(StoreCategoryRequest $request)
    {
        $user_id = Session::get('userid');
        $obj = new Category();
        $obj->name = $request->name;
        $obj->description = $request->description;
        $obj->createby = $user_id;
        if ($obj->save()) {
            return redirect('admin/category-list');
            // return back()->with($notification);
        }
    }
    public function category_list()
    {
        $categories = Category::all();
        return view('Admin.pages.categories-list', ['categories' => $categories]);
    }
}
