<?php

namespace App\Http\Controllers;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    //
    public function processTopup(Request $request)
    {
        // Validasi Form
        $request->validate([
            'topup_category_id' => 'required',
            'nominal_id' => 'required',
            'payment_method_id' => 'required',
        ]);

        // Create a new transaction
        $transaction = new Transaction();
        $transaction->user_id = auth()->user()->id; // Assuming you are using authentication
        $transaction->topup_category_id = $request->topup_category_id;
        $transaction->nominal_id = $request->nominal_id;
        $transaction->payment_method_id = $request->payment_method_id;
        
        // Save the transaction
        $transaction->save();

        return redirect('/')->with('success', 'Top-up successful!');
    }
}
