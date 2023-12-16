<?php

namespace App\Http\Controllers;
use App\Models\game;
use App\Models\topup_category;
use App\Models\topup;
use App\Models\payment_method;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TopupController extends Controller
{
    //
    public function index(){

        $data = [
            // "games" => game::all(),
            "topupCategories" => topup_category::all(),
            "nominals" => topup::all(), // Ganti sesuai model dan nama tabel nominal
            "paymentMethods" => payment_method::all(),
        ];

        return view('topup', $data);
    }

    public function showGameDetail($id){
        $game = game::findOrFail($id);
        return view('checkout', compact('game'));
    }

    public function checkout()
    {
        
    }
}
