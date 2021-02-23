<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function News_list()
    {
       $data = News::all();
       return view('welcome',['news' => $data]);
    }

}
