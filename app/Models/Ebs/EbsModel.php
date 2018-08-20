<?php

namespace App\Models\Ebs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class EbsModel extends Model
{

    public function __construct() {

        $this->connection = DB::connection('oracle');
    }    

}
