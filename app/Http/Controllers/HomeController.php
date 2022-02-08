<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Category;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        $categories = Category::All();
        return view('pages.create-post',compact('categories'));
    }

    public function storePost(Request $request){

        $data = $request -> validate([
            'title' => 'string',
            'author' => 'string',
            'subtitle' => 'string',
            'content' => 'string',
            'date' => 'required|date',
            'category_id' => 'integer'
        ]);
        $data['author'] = Auth::user() -> name;

        
        Post::create($data);
        return redirect() -> route('post');
    }
}
