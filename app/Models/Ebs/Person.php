<?php

namespace App\Models\Ebs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Person extends EbsModel
{

    public function get($mis_id) {

        return $this->connection->table('PEOPLE')->where('PERSON_CODE', $mis_id)->first();
    }  

}
