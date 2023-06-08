<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_question extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_id',
        'subject_id',
        'question',
        'option_1',
        'option_2',
        'option_3',
        'option_4',
        'correct_answer',
    ];
}
