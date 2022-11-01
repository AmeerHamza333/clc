<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoundationCourse extends Model
{
    protected $fillable =[
        'coursename',
    ];
    use HasFactory;
}
