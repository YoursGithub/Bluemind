<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferralCode extends Model
{
    use HasFactory;

    protected $fillable =['code'] ;

   // Define the relationship with users who have this referral code as their parent
   public function parentUsers()
   {
       return $this->hasMany(User::class, 'parent_referral_id');
   }

   // Define the relationship with users who have this referral code as their sharing code
   public function sharedUser()
   {
       return $this->hasOne(User::class, 'sharing_referral_id');
   }

}
