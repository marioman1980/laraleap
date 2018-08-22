<?php

namespace App\Models\Ebs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RegisterEventDetailsSlot extends EbsModel
{

    public function __construct() {

    }    

    /*****************************
     *
     * Define relationships
     *
     *****************************/

    public function register_event() {

        return $this->belongsTo(RegisterEvent::class);
    } 

    public function register_event_detail() {

        return $this->belongsTo(RegisterEventDetail::class);
    }  

    public function register_event_slot() {

        return $this->belongsTo(RegisterEventSlot::class);
    }    

    /*****************************
     *
     * Other functions
     *
     *****************************/ 

 
    /**
     * @param integer $register_event_id
     * @param date $date
     * @param date $end_date
     *
     * @return room_code
     */
    public function get_room($date, $end_date) {

        $room_slot = RegisterEventDetailsSlot::where('OBJECT_TYPE', 'R')->where('PLANNED_START_DATE', '>=', date('Y-m-d H:i:s', strtotime($date)))->where('PLANNED_END_DATE', '<', date('Y-m-d H:i:s', strtotime($end_date)))->where('REGISTER_EVENT_ID', $this->register_event_id)->first();

        if(!empty($room_slot)) {
            return DB::connection('oracle')->table('rooms')->where('id', $room_slot->object_id)->first()->room_code;
        }
    } 

    /**
     * @param integer $register_event_id
     * @param date $date
     * @param date $end_date
     *
     * @return string
     */
    public function get_teacher($date, $end_date) {

        $teacher_slot = RegisterEventDetailsSlot::where('OBJECT_TYPE', 'T')->where('PLANNED_START_DATE', '>=', date('Y-m-d H:i:s', strtotime($date)))->where('PLANNED_END_DATE', '<', date('Y-m-d H:i:s', strtotime($end_date)))->where('REGISTER_EVENT_ID', $this->register_event_id)->first();

        $teacher =  DB::connection('oracle')->table('people')->where('person_code', $teacher_slot->object_id)->first();
        return $teacher->forename.' '.$teacher->surname;
    }        

    public function usage() {

        $usage = Usage::where('OBJECT_TYPE', $this->object_type)->where('USAGE_CODE', $this->usage_code)->first();
        return $usage;
    }   

    public function status() {

        if(!empty($this->usage())) {
            if($this->usage()->is_positive == 'Y') {
                return 'complete';
            }
            else if($this->usage()->is_positive == 'N') {
                return 'incomplete';
            }
            else {
                return 'unknown';
            }
        }
    } 
}
