<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_student extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'email_id',
        'mobile_no',
        'username',
        'password',
        'address',
        'qualification'
    ];
}
