<?php

namespace App\Models\Ebs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Person extends EbsModel
{

	protected $connection = 'oracle';

    public function get($mis_id) {

    	return Person::where('PERSON_CODE', $mis_id)->first();
    }     

}
