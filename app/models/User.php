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

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
        
        protected $guarded = array('id');
        protected $fillable = array('name', 'email', 'username', 'password', 'phone');
        public static $rules = array(
          'name' => 'required|min:5',
          'email' => 'required|email|unique:users',
          'password' => 'confirmed',
          'username' => 'required|unique:users'
        );

}
