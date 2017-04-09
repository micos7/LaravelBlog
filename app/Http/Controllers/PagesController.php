<?php

namespace App\Http\Controllers;

class PagesController extends Controller {
  public function getIndex(){
    return view('pages.welcome');
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
