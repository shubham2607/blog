<?php
#Process variables data or params
		#talk to the model;
		#recieve from the model
		#compile or processdata from the model if needed
		#pass that data to the correct view
namespace App\Http\Controllers;

class PagesController extends Controller {

	public function getIndex() {
		return view('pages.welcome');
	}

	public function getAbout() {
		$first = 'BillFree';
		$last = 'Labs';
		$fullname = $first . " " .$last;
		$email = 'contact@billfree.in';
		$data = [];
		$data['email'] = $email;
		$data['fullname'] = $fullname;
		return view('pages.about')->withData($data);

	}

	public function getContact() {
		return view('pages.contact');

	}

}
