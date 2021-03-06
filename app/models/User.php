<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';


	// To allow insert
	protected $fillable = ['username','Name','isAdmin','isTeacher','password', 'created_at', 'updated_at'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
	public function getId()
	{
		return $this->id;
	}
	public function getName()
	{
		return $this->Name;
	}
	public function isAdmin(){
		if($this->isAdmin) return true;
		return false;
	}
	public function isTeacher(){
		if($this->isTeacher) return true;
		return false;
	}
}
