<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ebs_test extends Ebs
{

    public function oracle_test() {

        $test = $this->connection->table('PEOPLE')->where('PERSON_CODE', 30141843)->first();
        return $test;
    }  

}
