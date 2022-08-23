<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    //
    //
    public function dashboard(){
        return view('backend.pages.dashboard');
        //return "OK ไหม";
    }
    public function about(){
        return view('pages.about');
    }
    public function service(){
        return view('pages.service');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function login(){
        return view('pages.login');
    }
}
