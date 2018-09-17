<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

// Importation de l'alias de la classe
use App\Post;  
use App\Picture;  

class PostController extends Controller{	

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$posts = Post::all();
       		return view('back.dashboard', ['posts' => $posts]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
       		return view('back.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$post = new Post;
		$post->titre = $request->titre;
		$post->description = $request->description;
		$post->start = $request->start;
		$post->end = $request->end;
		$post->price = $request->price;
		$post->max_users = $request->max_users;

		$post->save();
		
		$path = $request->picture->store('/');
		$file =  $request->file('picture');

		// Storage::disk('local')->put($path, $file);

		$picture = Picture::create([
		    'title' => 'Default',
		    'link' => $path,
		    'post_id' => $post->id,
		]);
		
		$post->pictures()->save($picture);

		return redirect('/dashboard');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
	    //
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit(int $id)
	{
		$post = Post::find($id);
      		return view('back.edit', ['posts' => $post]);

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{	
		$post = Post::find($id);

		$post->titre = $request->titre;
		$post->description = $request->description;
		$post->start = $request->start;
		$post->end = $request->end;
		$post->price = $request->price;
		$post->max_users = $request->max_users;

		$post->save();
    		return redirect('/dashboard');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$posts = Post::find($id);
		$posts->delete();

		return redirect('/dashboard');
	}
}
