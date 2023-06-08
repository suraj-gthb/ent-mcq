<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_subject extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_id',
        'subject_name'
    ];
}
