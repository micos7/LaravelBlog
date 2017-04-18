<?php

namespace App\Http\Controllers;
use App\Post;

class PagesController extends Controller {
  public function getIndex(){
    $posts = Post::orderBy('created_at','desc')->limit(4)->get();
    return view('pages.welcome')->withPosts($posts);
  }

  public function getAbout(){
    $first = 'Mihai';
    $last = 'Cosinschi';
    $fullname = $first. ' ' . $last;
    $email = 'micos7@gmail.com';
    $data = [];
    $data['email'] = $email;
    $data['name'] = $fullname;


    return view('pages.about')->withData($data);
  }

  public function getContact(){
    return view('pages.contact');
  }

}
