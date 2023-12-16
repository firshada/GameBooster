<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;

use App\Models\News;

class NewsController extends Controller
{
    //
    public function index(){

        return view('news', [
            "news" => News::all()
        ]);
    }
}
