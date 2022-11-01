<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;
    protected $fillable =[
        'coursename',
        'startdate',
        'enddate',
        'courselevel',
        'studymode',
        'fee',
        'courseduration2'
    ];
    use HasFactory;
}
