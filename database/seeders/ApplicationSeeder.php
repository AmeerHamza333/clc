<?php

namespace Database\Seeders;

use App\Models\Aqachieve;
use App\Models\Studentapplication;
use App\Models\Workexp;
use Illuminate\Database\Seeder;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Studentapplication::create([
            'userid' => '2',
            'firstname' => 'Sulman',
            'lastname' => 'shah',
            'title' => 'men',
            'pfname' => 'lucky',
            'dob' => '01-02-2022',
            'gender' => 'male',
            'address' => 'gujrat',
            'city' => 'gujrat',
            'postalcode' => '5001',
            'hometelno' => '0301145263',
            'mobile' => '032145697',
            'email' => 'sulman123@gmail.com',
            'cob' => 'Pakistan',
            'nationality' => 'pakistan',
            'edtouk' => '02-12-2022',
            'foundationcourses' => 'phd',
            'undergraduatecourses' => 'mphil',
            'modeofstudy' => 'full time',
            'commencement' => 'no',
            'courseduration' => '6months',
            'feespaidby' => 'me',
            'engfirstlang' => 'no',
            'anyengcourse' => 'yes',
            'proficiencytest' => 'yes',
            'reasonforchoosing' => 'any',
            'futureplan' => 'no',
            'kindofemp' => 'no',
            'interestandhobies' => 'many',
            'specialneeds' => 'no',
            'statebenifits' => 'no',
            'criminalrecord' => 'yes',
            'specificity' => 'no',
            'coursechoosen' => 'phd',
            'intellectual' => 'tomuch',
            'fluetandlogicoral' => 'yes',
            'ability' => 'good',
            'perseverance' => 'super',
            'leadership' => 'good',
            'creativity' => 'good',
            'concern' => 'great',
            'refreesname' => 'husnain',
            'refreessign' => '%334@',
            'refreesdate' => '02-54-55',
            'marketinginfo' => 'no',
            'ethicorigin' => 'Sulman',
            'religion' => 'Islam',
        ]);

        Aqachieve::create([
            'examdate' => '2022-10-12',
            'examingboard' => '2022-10-12-12-2015',
            'subjects' => 'english',
            'qualification' => 'matric',
            'resultachieved' => '222',
            'said' => 1,
        ]);

        Workexp::create([
            'datefrom' => '2022-10-12',
            'dateto' => '2022-10-12',
            'ftpt' => 'english',
            'postsheld' => 'matric',
            'orgname' => '222',
            'orgaddress' => '55940981',
            'despofduties' => 1,
            'said' => 1,
        ]);
    }
}