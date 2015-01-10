<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/1/2015
 * Time: 3:05 μμ
 */

class UserController extends Controller{
    public function postLogin(){
        $userdata = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        );
        if (Auth::attempt($userdata)) {
            echo 'SUCCESS!';
            echo json_encode($userdata);
            $id = Auth::user()->getId();
            $name = Auth::user()->getName();
            $isAdmin = Auth::User()->isAdmin();
            echo "user_id: ".$id;
            echo "user Name: ".$name;
            echo " Is current user admin: ".Auth::User()->isAdmin();
            return Redirect::to('home')->withInput()->with('success', 'Συνδεθήκατε με επιτυχία ');
        }
        else {
            echo "Error";
            echo json_encode($userdata);
            return Redirect::to('login')->withInput()->with('Error', 'Λάθος όνομα χρήστη ή κωδικός πρόσβασης !');
        }
    }
    public function postCreateTeacher(){
        $date = new \DateTime;
        $userdata = array(
            'username' => Input::get('username'),
            'Name' => Input::get('Name'),
            'isAdmin'=>false,
            'isTeacher'=>true,
            'password' => Hash::make(Input::get('password')),
            'created_at' => $date,
            'updated_at' => $date
        );
        User::create($userdata);
        return Redirect::to('home')->withInput()->with('success_create-teacher', ' Ο καθηγητής δημιουργήθηκε επιτυχώς ');
    }
    }
