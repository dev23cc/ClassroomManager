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
       // $user = Auth::user();
        if (Auth::attempt($userdata)) {
            echo 'SUCCESS!';
            echo json_encode($userdata);
            $id = Auth::user()->getId();
            $name = Auth::user()->getName();
            $isAdmin = Auth::User()->isAdmin();
            echo "user_id: ".$id;
            echo "user Name: ".$name;
            echo " Is current user admin: ".Auth::User()->isAdmin();
            return Redirect::to('home')->withInput()->with('success', 'Logged in successfully ');
        }
        else {
            echo "Error";
            echo json_encode($userdata);
            return Redirect::to('login')->withInput()->with('Error', 'Username or password invalid !');


        }
        }
      //  return Redirect::to('home')->with($user);



        // return View::make('home')->with($user);


    //}
}