<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankDetail extends Model
{
    use HasFactory;
    
    // protected $fillable = [
    //     'account_name', 'account_number', 'branch_name', 
    //     'ifsc_code', 'adhaar_card', 'pan_card', 'is_kyc_verified' ,'user_id'
    // ];
    protected $guarded = [] ;

    // Define the relationship with User
    public function user()
    {
        return $this->belongsTo(User::class ,'user_id');
    }
}
