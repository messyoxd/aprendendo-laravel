<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\User;

use Carbon\Carbon;

class PostController extends Controller
{

    // public function __construct(){
    //
    //     $this->middleware('auth')->except(['index', 'show']);
    //
    // }

    public function index(){

      $posts = Post::latest();

      // $url = url()->full();
      //
      // if(count(explode('?',$url))){
      //     $parameters = explode('&', explode('?',$url)[1]);
      //     $month = explode('=', $parameters[0])[1];
      //     $year = explode('=', $parameters[1])[1];
      //     if(explode('=', $parameters[0])[0] == 'month'){
      //         $posts->whereMonth('created_at', Carbon::parse($month)->month);
      //     }
      //     if(explode('=', $parameters[1])[0] == 'year'){
      //         $posts->whereYear('created_at', $year);
      //     }
      // }

      if($month = request('month')){

          $posts->whereMonth('created_at', Carbon::parse($month)->month);

      }
      if($year = request('year')){

          $posts->whereYear('created_at', $year);
      }

      $posts = $posts->get();

      $archive = Post::selectRaw('year(created_at) year, monthname(created_at) month')
      ->groupBy('year','month')
      ->orderByRaw('min(created_at) desc')
      ->get()
      ->toArray();

      return view('posts.index',compact('posts','archive'));

    }

    public function show($id){
      $post = Post::find($id);
      $escritor = User::find($post->user_id);
      return view('posts.show',compact('post','escritor'));
    }

    public function create(){
        if(auth()->check()){
            return view('posts.create');
        }
        else{
            return view('sessions.create');
        }
    }

    public function store(){
        if(auth()->check()){
            $this->validate(request(),[

              'title' => 'required|max:256',

              'body' => 'required'

            ]);

            auth()->user()->publish(

                new Post(request(['title','body']))

            );

            return redirect('/');
        }
        else{
            return view('sessions.create');
        }
    }

}
