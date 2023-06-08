<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_admin extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'email_id',
        'mobile_no',
        'username',
        'password',
        'address',
    ];
}
