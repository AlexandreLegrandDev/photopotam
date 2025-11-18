<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Main extends Controller
{
    public function index(){
        return view('index');
    }

    public function album(){
        return view('album');
    }

    public function detailAlbum($id){
        return view('detailAlbum', ['id' => $id]);
    }

    public function signin(){
        return view('signin');
    }

    public function login(){
        return view('login');
    }

}