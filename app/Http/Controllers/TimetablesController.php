<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ebs\RegisterEventDetailsSlot;

class TimetablesController extends BaseController
{

    /**
     * @param integer $mis_id
     *
     * @return array
     */
    public function index($mis_id, Request $request) {
    	
    	$user = $this->user;
    	$topic = $this->set_topic($mis_id);

        $date = !empty($request->input('date')) ? $request->input('date') : $this->date();
        $date = date('w', strtotime($date)) == 1 ? $date : date('d F Y', strtotime('previous monday', strtotime($date)));
        $end_date = date('d F Y', strtotime($date.' +1 week'));


        $reds = RegisterEventDetailsSlot::where('OBJECT_ID', $mis_id)->where('PLANNED_START_DATE', '>=', date('Y-m-d H:i:s', strtotime($date)))->where('PLANNED_END_DATE', '<', date('Y-m-d H:i:s', strtotime($end_date)))->get();

        // var_dump($reds[0]);

        $registers = [];

        foreach($reds as $red) {

            $register = (object)[

                'title' => $red->register_event()->first()->description,
                'timetable_start' => $red->planned_start_date,
                'timetable_end' => $red->planned_end_date,
                'room' => $red->get_room($date, $end_date),
                'teacher' => $red->get_teacher($date, $end_date),
                'mark' => $red->usage_code,
                // 'usage' => $red->usage(),
                'status' => $red->status()

            ];
            var_dump($register);

        }


    	return view('timetables', [
    		'user' => $user,
    		'topic' => $topic,
    		'controller_name' => $this->controller_name(),
            'date' => $date
    	]);
    }
}
