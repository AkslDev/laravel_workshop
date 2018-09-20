<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\Middleware\ShareErrorsFromSession;

// Importation de l'alias de la classe
use App\Post;  
use App\Picture;

class PostController extends Controller{	
	
	private $paginate = 5;

	// Page d'accueil - Admin
	public function index(){
		$posts = Post::orderBy('created_at', 'desc')->paginate(15);
       		return view('back.admin', ['posts' => $posts]);
	}

	// Recherche sur la page d'accueil - Admin
	public function searchAdmin(Request $request){
		$query = $request->search;
  		$posts = Post::where('titre', 'LIKE', '%' . $query . '%')->paginate($this->paginate);
		return view('back.admin', compact('posts', 'query'));
	}

	// Page de création d'un post - Admin
	public function create(){
       		return view('back.create');
	}

	// Stockage de la data à la création d'un post
	public function store(Request $request){	
		$this->validate($request, [
			'post_type' => 'required',
			'name' => 'required',
			'titre' => 'required|string',
			'description' => 'required|string',
			'picture' => 'required|image|max:3000',
			'start' => 'required|date',
			'end' => 'required|date|after_or_equal:start',
			'price' => 'required|integer|numeric',
			'max_users' => 'required|integer|numeric',
       		]);
       		$post = Post::create($request->except(['name']));
       		$post->categories_id = $request->name;

		$post->save();

		$path = $request->picture->store('/');
		$file =  $request->file('picture');

		$picture = Picture::create([
		    'title' => 'Default',
		    'link' => $path,
		    'post_id' => $post->id,
		]);
		
		$post->pictures()->save($picture);

		return redirect('/admin');
	}

	// Page de prévisualisation d'un post - Admin
	public function show($id){
        	$post = Post::find($id);
        	return view('back.preview', ['posts' => $post]);
	}

	// Page de modification d'un post - Admin
	public function edit(int $id){
		$post = Post::find($id);
      		return view('back.edit', ['posts' => $post]);
	}

	// Stockage de la data à la modification d'un post
	public function update(Request $request, $id){
		$post = Post::find($id);

		$post->titre = $request->titre;
		$post->description = $request->description;
		$post->start = $request->start;
		$post->end = $request->end;
		$post->price = $request->price;
		$post->max_users = $request->max_users;
		$post->categories_id = $request->name;


		$new_picture = $request->file('picture');
		$old_picture = $post->pictures->link;

		if ($new_picture !== null) {
			Storage::disk('local')->delete($old_picture);

			$path = $request->picture->store('/');
			if ($post->pictures()->exists()) {
				$post->pictures()->update([
					'title' => 'Default',
					'link' => $path,
					'post_id' => $post->id,
				]);
			}else{
 				$post->pictures()->create([
					'title' => 'Default',
					'link' => $path,
					'post_id' => $post->id,
				]);
			}
		}
		
		$post->save();

    		return redirect('/admin');
	}

	// Suppression de la data au click sur le bouton supprimer
	public function destroy($id){
		$posts = Post::find($id);
		$posts->delete();

		return redirect('/admin');
	}
}
