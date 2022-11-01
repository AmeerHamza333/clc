<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aqachieve extends Model
{
    protected $table = 'aqachieves';
    protected $primaryKey = 'aqachieve_id';
    protected $fillable = ['examdate', 'examingboard', 'subjects', 'qualification', 'resultachieved', 'said', 'iscompleted'];

    public function getstudentapplication()
    {
        return $this->belongsTo(Studentapplication::class, 'said', 'workexps_id');
    }
}