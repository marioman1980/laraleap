<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ebs extends BaseModel
{

    public function __construct() {

        $this->connection = DB::connection('oracle');
    }    

}
