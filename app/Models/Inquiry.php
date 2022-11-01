<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable =[
        'name',
        'phone',
        'email',
        'message',
    ];
    use HasFactory;
}
