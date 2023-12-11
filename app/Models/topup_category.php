<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class topup_category extends Model
{
    use HasFactory;

    public function topups()
    {
        return $this->hasMany(topup::class);
    }
}
