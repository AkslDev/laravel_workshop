<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Importation de l'alias de la classe
use App\Post; 

class FrontController extends Controller{

	private $paginate = 5;

	// Page d'accueil
	public function index(){
		// Retourne tout les posts
		$post = Post::orderBy('created_at', 'asc')->take(2)->get();
		return view('front.index', ['posts' => $post]);
	}

	// Page d'un Post
	public function show(int $id){
		// Retourne le post demandé
        	$post = Post::find($id);
        	return view('front.post', ['posts' => $post]);
   	}

	// Page Stage
   	public function stage(){
   		// Retourne les posts ayant pour 'post_type' -> 'stage'
		$posts = Post::where('post_type', 'stage')->paginate($this->paginate);
		return view('front.stage', ['posts' => $posts]);
	}
	// Page Formation
	public function formation(){
   		// Retourne les posts ayant pour 'post_type' -> 'formation'
		$posts = Post::where('post_type', 'formation')->paginate($this->paginate);
		return view('front.formation', ['posts' => $posts]);
	}
	// Page Contact
   	public function contact(){
        	return view('front.contact');
   	} 

}
