<?php

namespace App\Models;

use App\Models\Studentapplication;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Workexp extends Model
{
    protected $table = 'workexps';
    protected $primaryKey = 'workexps_id';
    protected $fillable = ['datefrom', 'dateto', 'ftpt', 'postsheld', 'orgname', 'orgaddress', 'despofduties', 'said', 'iscompleted'];

    public function works(){
        return $this->belongsTo(Studentapplication::class, 'said','workexps_id');
    }

}
