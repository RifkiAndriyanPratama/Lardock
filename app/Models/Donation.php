<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = ['title', 'description', 'tumbnail', 'target_amount', 'current_amount', 'user_id', 'category_id'];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function transactions(){
        return $this->hasMany(Transaction::class, 'donation_id');
    }
}
