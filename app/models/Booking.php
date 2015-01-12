<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/1/2015
 * Time: 4:03 μμ
 */

class Booking extends Eloquent{
    protected $fillable = ['classroom_id', 'teacher_id', 'start_time', 'end_time'];
    //We don't need timestamps for classrooms
    public $timestamps = false;
    protected $table = 'bookings';
    protected function getStartTime(){
        return $this->start_time;
    }
    protected function getEndTime(){
        return $this->end_time;
    }
}