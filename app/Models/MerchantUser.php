<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class MerchantUser extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'com_name',
        'business_num',
        'com_rep_name',
        'open_reg_num',
        'postal_code',
        'address1',
        'address2',
        'email',
        'phone',
        'auth_num',
        'password',
        'bank_code',
        'account_num',
        'privacy_agree',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
