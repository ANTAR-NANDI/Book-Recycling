<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin.pages.index');
    }
    public function Profile()
    {
        return view('Admin.pages.profile');
    }
    public function user_list()
    {
        return view('Admin.pages.user-list');
    }
    public function block_user()
    {
        return view('Admin.pages.block-user');
    }
    public function books_list()
    {
        return view('Admin.pages.books_list');
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
}
