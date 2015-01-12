<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 31/12/2014
 * Time: 10:53 πμ
 */

class Classroom extends Eloquent {
    protected $fillable = ['name', 'isfree'];
    //We don't need timestamps for classrooms
    public $timestamps = false;
    protected $table = 'classrooms';
    /**
     * @return string
     */
    public function getClassroomName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getClassroomId()
    {
        return $this->classroomId;
    }
}