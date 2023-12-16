<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class topup extends Model
{
    use HasFactory;

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function game()
    {
        return $this->belongsTo(game::class);
    }
}
