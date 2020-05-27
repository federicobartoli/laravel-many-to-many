<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\InfoUser;
use App\Category;
use App\Page;
use App\Tag;
use App\Photo;

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
    public function index()
    {
       $users = User::find(1);
       $category = Category::find(1); //prendo tutto
       $page = Page::find(1);

       // dd($users->info); //cosi lui fa funzionare la funzione Info.
       // dd($users->categories[0]->name); //cosi lui fa funzionare la funzione Categories..è un array quindi si dovrebbe ciclarle per prendere tutte le categorie.
       // dd($users->photos);
       // dd($users->tags);
       // dd($users->pages);
       // dd($page->photos);
       // dd($category->pages);


       return view('home');
    }
}
