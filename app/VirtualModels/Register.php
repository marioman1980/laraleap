<?php

namespace App\VirtualModels;

class Register {

    public $title;
    public $timetable_start;
    public $timetable_end;
    public $room;
    public $teacher;
    public $mark;
    public $status;
    public $mis_id;

    public function __construct($red, $date, $end_date) {

        $this->title = $red->register_event()->first()->description;
        $this->title = substr($red->register_event()->first()->description, 0, strpos($red->register_event()->first()->description, '['));
        $this->timetable_start = $red->planned_start_date;
        $this->timetable_end = $red->planned_end_date;
        $this->room = $red->get_room($date, $end_date);
        $this->teacher = $red->get_teacher($date, $end_date);
        $this->mark = $red->usage_code;
        $this->status = $red->status();
        $this->mis_id = $red->register_event()->first()->id;
    }

    /**
     * @param date $date
     * @param integer $i
     * 
     * @return object
     */
    public function get_slot($date, $i) {

        if (strtotime($this->timetable_start) >= strtotime($date.' + '.$i.' days') && strtotime($this->timetable_start) < strtotime($date.' + '.($i + 1).' days')) {

            return $this;
        }
    }

    /**
     * @return integer
     */
    public function timetable_height() {

        return floor((strtotime($this->timetable_end) - strtotime($this->timetable_start)) / 50);
    }

    /**
     * @return integer
     */
    public function timetable_margin() {

        return floor((strtotime($this->timetable_start) - strtotime(date('Y-m-d', strtotime($this->timetable_start)).' 08:00:00')) / 50);
    }      
}