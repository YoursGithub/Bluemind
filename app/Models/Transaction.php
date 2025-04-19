<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = [] ;

    // Define the relationship with User
    public function user()
    {
        return $this->belongsTo(User::class ,'user_id');
    }
    
    
    public function investment()
    {
        return $this->belongsTo(Investment::class ,'investment_id');
    }
        

}
