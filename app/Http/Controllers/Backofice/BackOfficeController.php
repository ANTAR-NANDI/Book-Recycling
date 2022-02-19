<?php

namespace App\Http\Controllers\Backofice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use Session;

class BackOfficeController extends Controller
{
    public function store(Request $request)
    {
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);
        //dd($request);
        $user_id = Session::get('userid');
        if ($request->hasFile('img')) {
            $img = $request->file('img')->getClientOriginalExtension();
            $filename = 'company-logo-' . time() . '.' . $img;
            $path = $request->file('img')->move(public_path(), $filename); //image save public folder
        }
        //You should store only filename not path in db
        Book::create([
            'name' => $request->name,
            'image' => $request->filename,
            'price' => ($request->price ? $request->price : 0),
            'user_id' => $user_id,
            'cat_id' => $request->c_id,
            'date' => $request->date,
            'type' => $request->type,
            'description' => $request->description,
            'issold' => 0
        ]);

        return redirect('backoffice/home');
    }
    public function index()
    {
        $Books = Book::paginate(3);
        $Books1 = Book::all()->where('issold', '=', 0)->groupBy('cat_id')->count();
        // dd($Books1);
        $categories = Category::all();
        return view('User-Backoffice.pages.index', ['Books' => $Books, 'Books1' => $Books1, 'categories' => $categories]);
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
        // $users = User::paginate(15)
        // $Books = DB::table('books')->paginate(2);
        $Books = Book::paginate(3);
        $categories = Category::all();
        // dd($categories);
        return view('User-Backoffice.pages.shop', ['Books' => $Books, 'categories' => $categories]);
    }
    public function book_by_category($id)
    {
        $cat_id = $id;
        $Books = Book::where('cat_id', '=', $cat_id)->paginate(3);
        $categories = Category::all();
        return view('User-Backoffice.pages.shop', ['Books' => $Books, 'categories' => $categories]);
    }
    public function book_details($id)
    {
        $book_id = $id;
        $Books = Book::where('id', '=', $book_id);
        dd($Books);
        return view('User-Backoffice.pages.details', ['Books' => $Books]);
    }
    public function createpost()
    {
        $categories = Category::all();
        return view('User-Backoffice.pages.addpost', ['categories' => $categories]);
        //return view('User-Backoffice.pages.addpost');
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
