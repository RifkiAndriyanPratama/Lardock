<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['donation_id', 'user_id', 'amount'];

    public function donation(){
        return $this->belongsTo(Donation::class, 'donation_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
