<?php

namespace App\Models;

use App\Models\Aqachieve;
use App\Models\Workexp;
use Illuminate\Database\Eloquent\Model;

class Studentapplication extends Model
{
    protected $table = 'studentapplications';
    protected $primaryKey = 'said';
    protected $fillable = ['said', 'userid', 'firstname', 'lastname', 'title', 'pfname', 'dob', 'gender', 'address', 'city', 'postalcode', 'hometelno', 'mobile', 'email', 'cob', 'nationality', 'edtouk', 'courselevel', 'undergraduatecourses', 'modeofstudy', 'commencement', 'courseduration', 'feespaidby', 'engfirstlang', 'anyengcourse', 'proficiencytest', 'reasonforchoosing', 'futureplan', 'kindofemp', 'interestandhobies', 'specialneeds', 'statebenifits', 'criminalrecord', 'specificity', 'coursechoosen', 'intellectual', 'fluetandlogicoral', 'fluetandlogicwritten', 'ability', 'perseverance', 'leadership', 'creativity', 'concern', 'refreesname', 'refreessign', 'refreesdate', 'marketinginfo', 'ethicorigin', 'religion', 'status'];

    public function getworkexp()
    {
        return $this->hasMany(Workexp::class, 'said', 'said');
    }

    public function getaqachieves()
    {
        return $this->hasMany(Aqachieve::class, 'said', 'said');
    }
}