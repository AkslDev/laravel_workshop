<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Importation de l'alias de la classe
use App\Post; 

class FrontController extends Controller{

	private $paginate = 5;


	// PAGE ACCUEIL 
	public function index(){
		// Retourne tout les posts de l'application
		$post = Post::all();

		return view('front.index', ['posts' => $post]);
	}

	// PAGE POST OUVERT
	public function show(int $id){

        	$post = Post::find($id);
        	
        	return view('front.post', ['posts' => $post]);
   	}


   	public function stage(){
		// Retourne tout les posts de l'application
		$posts = Post::where('post_type', 'stage')->paginate($this->paginate);
		return view('front.stage', ['posts' => $posts]);
	}
	public function formation(){
		// Retourne tout les posts de l'application
		$posts = Post::where('post_type', 'formation')->paginate($this->paginate);
		return view('front.formation', ['posts' => $posts]);
	}
   	public function contact(){
        	return view('front.contact');
   	} 
}
