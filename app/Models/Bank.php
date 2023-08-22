<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;
    protected $fillable = [
        '_id',
        'image',
        'colour',
        'Bank_Name',
        'toll_free_num',
        'mini_stat_num',
        'mini_stat_sms',
        'cust_care_num',
        'sms_inquiry',
        'net_banking_url',
    ];
}
