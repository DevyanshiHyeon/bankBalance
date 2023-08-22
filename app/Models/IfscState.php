<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IfscState extends Model
{
    use HasFactory;
    protected $fillable = ['ifsc_bank_id','state_name'];
}
