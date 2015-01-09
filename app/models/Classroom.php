<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 31/12/2014
 * Time: 10:53 πμ
 */

class Classroom extends Eloquent {
    private $classroomId;
    protected $classroomName;

    /**
     * @return string
     */
    public function getClassroomName()
    {
        return $this->classroomName;
    }

    /**
     * @return int
     */
    public function getClassroomId()
    {
        return $this->classroomId;
    }
    function __construct(){
        $this->classroomId=0;
        $this->classroomName="ClassroomName-101";
    }

}