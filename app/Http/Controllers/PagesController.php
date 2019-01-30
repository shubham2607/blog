<?php
#Process variables data or params
		#talk to the model;
		#recieve from the model
		#compile or processdata from the model if needed
		#pass that data to the correct view
namespace App\Http\Controllers;
use App\Post;

class PagesController extends Controller {

	public function getIndex() {
		$post = Post::orderBy('created_at', 'desc')->limit(4)->get();
		return view('pages.welcome')->withPosts($post);
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
