<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studentfile extends Model
{
    protected $table = 'studentfiles';
    protected $primaryKey = 'fileid';
    protected $fillable = ['filename', 'applicationid'];

}
