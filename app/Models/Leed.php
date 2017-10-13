<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Leed extends Model
{
	protected $fillable = ['name', 'tel', 'email'];
    
    // public function mail()
    // {
    // 	// $name = $array['name'];
    // 	// $tel = $array['tel'];
    // 	// $email = $array['email'];

    // 	Mail::send('email.contact', 'username' => 'test', function($message){
    // 		var_dump($message);
    // 		die();
    // 		$message->to('kravadima@gmail.com')->subject("Welcome");
    // 	});
    // }
}
