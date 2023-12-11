<?php

namespace App\Http\Controllers;
use App\Models\game;
use App\Models\News;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('landingpage', [
            "games" => game::all(),
            "top_games" => game::take(3)->get(),
            "news" => News::take(2)->get(),
        ]);
    }
}
