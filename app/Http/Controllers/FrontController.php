<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Importation de l'alias de la classe
use App\Post; 

class FrontController extends Controller{
	public function index(){
		// Retourne tout les posts de l'application
		$posts = Post::all();
		// return Post::all();
		return view('front.index', ['posts' => $posts]);
	}
	public function show(int $id){
		// Retourne tout les posts de l'application
		return Post::find($id);
	}
}
