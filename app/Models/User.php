<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str ;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;
    use CanResetPassword;

    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

 

    // Define the relationship with the ReferralCode model for parent referral code
    public function parentReferral()
    {
        return $this->belongsTo(ReferralCode::class, 'parent_referral_id');
    }

    // Define the relationship with the ReferralCode model for sharing referral code
    public function sharingReferral()
    {
        return $this->belongsTo(ReferralCode::class, 'sharing_referral_id');
    }

    // Define the relationship with BankDetails
    public function bankDetails()
    {
        return $this->hasOne(BankDetail::class);
    }

    public function withParentUser()
    {
        return $this->toArray() + [
            'parent_user' => $this->parent_referral_id 
                ? User::firstWhere('sharing_referral_id', $this->parent_referral_id)
                : null,
        ];
    }
}
