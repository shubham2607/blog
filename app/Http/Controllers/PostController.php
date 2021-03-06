<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Post;
use Session;

class PostController extends Controller {


	public function __construct() {
		$this->middleware('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// Create a veriable and store all the blog posts in it from the database
		$posts = Post:: orderBy('id', 'desc')->paginate(10);

		//return a view and pass in the above variables
		return view('posts.index')->withPosts($posts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//validate the data
		$this->validate($request, array(
				'title' => 'required|max:255',
				'body' => 'required'
		));

		//Succesfully store in the database
		$post = new Post;
		$post->title = $request->title;
		$post->body = $request->body;

		$post->save();

		Session::flash('success', 'The Blog post was successfully saved!');
		//redirect to another page
		return redirect()->route('posts.show', $post->id);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);
		return view('posts.show')->withPost($post);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// Find the post in the database and save in the veriable
		$post = Post::find($id);

		//Return the view and pass in the variable 
		return view('posts.edit')->withPost($post);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		// Validate the data
		$this->validate($request, array(
			'title' => 'required|max:255',
			'body' => 'required'
		));

		//Save data to the database
		$post = Post::find($id);
		$post->title = $request->input('title');
		$post->body = $request->input('body');

		$post->save();

		// set flash data with success message
		Session::flash('success', 'The Blog post was successfully updated!');

		//redirect with flash data to post.show
		return redirect()->route('posts.show', $post->id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::Find($id);
		$post->delete();

		Session::flash('success', 'The Blog post was successfully deleted!');
		return redirect()->route('posts.index');
	}

}
