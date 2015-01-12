<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/1/2015
 * Time: 4:45 μμ
 */

class BookingController extends Controller{
    public function showBookingView() {
        $data=  Input::all();
        foreach ($data as $key => $value) {
            $classroomId = $key;
        }
        $classroom = Classroom::find($classroomId);
        return View::make('bookings.create-booking')->with('classroomId', $classroomId)->with( 'classroom', $classroom);
    }
    public function proccesDate($date){
        $year;
        $month;
        $day;
        $hour;
        $minute;
        $second;
        foreach ($date as $key => $value) {
            if($key=='year') $year = $value;
            if($key=='month') $month = $value;
            if($key=='day') $day = $value;
            if($key=='hour') $hour = $value;
            if($key=='minute') $minute = $value;
            if($key=='second') $second = $value;
        }
        $date=$year.'-'.$month.'-'.$day;
        $time=$hour.':'.$minute.':'.$second;
        $datetime =$date.' '.$time;
        $dt = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $datetime);
        return $dt;

    }
    public function postCreateBooking() {
        $classroom_id = Input::get('id');
       $date =  Input::get('date_from');
       $df = $this->proccesDate($date);
       $date =  Input::get('date_to');
       $dt = $this->proccesDate($date);
        $bookingdata = array(
            'classroom_id' => $classroom_id,
            'teacher_id' => Auth::user()->getId(),
            'start_time' => $df,
            'end_time' => $dt
        );
        Booking::create($bookingdata);
        return Redirect::to('home')->withInput()->with('success_create-booking', ' Ο καταχώρηση δημιουργήθηκε επιτυχώς ');

    }
public function showDeleteBookingView(){
    $data=  Input::all();
    foreach ($data as $key => $value) {
        $classroomId = $key;
    }
    $classroom = Classroom::find($classroomId);
    echo json_encode($classroom->getClassroomId());
    DB::table('bookings')->where('classroom_id', '=', $classroomId)->delete();
    DB::table('classrooms')->where('id', $classroomId)->update(array('isfree' => true));
    return View::make('home.home');
}
}