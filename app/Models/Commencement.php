<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commencement extends Model
{
    protected $fillable =[
        'sessionname',
        'sessionstartdate',
        'sessionenddate',
    ];
    use HasFactory;
}
