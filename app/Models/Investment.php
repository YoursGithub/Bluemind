<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory;

    protected $guarded = [] ;

    // Define the relationship with User
    public function user()
    {
        return $this->belongsTo(User::class ,'user_id');
    }
}
