<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailNotification extends Controller
{
	public function callback( Request $callback_request )
	{
		if(!$phone = $callback_request->get( 'client-phone' )){
			return ['error' => 1];
		}
		if(count($phone) < 6 && count($phone) > 18){
			return ['error' => 2];
		}
		if(!$name = $callback_request->get( 'client-name' )){
			return ['error' => 3];
		}
		if(count($name) < 3 && count($name) > 128){
			return ['error' => 4];
		}
		Mail::send( 'email.callback', [
			'phone' => $callback_request->get( 'client-phone' ),
			'name'  => $callback_request->get( 'client-name' )
		], function ( $m )
		{
			$m->from( 'hello@app.com', 'Your Application' );

			$m->to( 'bodunjo855@gmail.com', 'Евгений' )->subject( 'Новый клиент для звонка' );
			$m->to( 'himichenkouu@gmail.com', 'Юрий' )->subject( 'Новый клиент для звонка' );
		} );

		return ['success' => true];
	}
}
