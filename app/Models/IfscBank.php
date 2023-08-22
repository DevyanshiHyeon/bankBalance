<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IfscBank extends Model
{
    use HasFactory;
    protected $fillable = ['_id','bank_name'];
}
