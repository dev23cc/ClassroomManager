<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/1/2015
 * Time: 10:50 πμ
 */

class ClassRoomController extends Controller{
  //  return View::make(ClassroomView@showWelcome);
    public function postCreateClassroom(){
        $classroom = array(
            'name' => Input::get('ClassroomName'),
            'isfree' => true
        );
        if($classroom["name"]=="") {
            return Redirect::to('create-classroom')->withInput()->with('error_create-classroom', ' Το όνομα της αίθουσας δεν μπορεί να είναι κενό');
        }
        else {
            Classroom::create($classroom);
            return Redirect::to('home')->withInput()->with('success_create-classroom', ' Η αίθουσα δημιουργήθηκε επιτυχώς');
        }
    }
    public function showClassroomsView(){
        return View::make('classrooms.view-classrooms');
    }
    public function getAllClassrooms(){
        // get data from db
        $classrooms = Classroom::all();
        $bookings = Booking::all();
        return View::make('classrooms.view-classrooms')->with('classrooms', $classrooms)->with('bookings', $bookings);
    }


}
