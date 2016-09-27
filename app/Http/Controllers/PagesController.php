<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

	public function getIndex(){

		 return view('pages.welcome');


	}

	public function getAbout(){

		$first= 'kevin';
		$last='DOUREPOULLE';
		$email = "rajekevin@hotmail.fr";

		$fullname = $first ." ".$last;
		 // return view('pages.about')->with("fullname", $fullname);

		$data['email']=$email;

		 return view('pages.about')->withFullname($fullname)->withEmail($email); 

	}



	public function getContact(){

		 return view('pages.contact');


	}
}