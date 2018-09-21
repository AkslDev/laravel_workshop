<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

// Importation de l'alias de la classe
use App\Post; 

class FrontController extends Controller{

	private $paginate = 5;

	// Page d'accueil
	public function index(){
		// Retourne tout les posts
		$post = Post::published()->orderby('created_at', 'desc')->take(2)->get();
		return view('front.index', ['posts' => $post]);
	}
	// Recherche
   	public function search(Request $request){
  		$query = $request->search;
<<<<<<< HEAD
  		$posts = Post::where('titre', 'LIKE', '%' . $query . '%')->paginate($this->paginate);
=======
  		$posts = Post::published()->where('titre', 'LIKE', '%' . $query . '%')->paginate($this->paginate);
>>>>>>> fixbug
		return view('front.index', compact('posts'));
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
		$posts = Post::published()->where('post_type', 'stage')->paginate($this->paginate);
		return view('front.stage', ['posts' => $posts]);
	}
	// Recherche
   	public function searchStage(Request $request){
  		$query = $request->search;
<<<<<<< HEAD
  		$posts = Post::where('titre', 'LIKE', '%' . $query . '%')->where('post_type', 'stage')->paginate($this->paginate);
=======
  		$posts = Post::published()->where('titre', 'LIKE', '%' . $query . '%')->where('post_type', 'stage')->paginate($this->paginate);
>>>>>>> fixbug
		return view('front.stage', compact('posts'));
   	}
	// Page Formation
	public function formation(){
   		// Retourne les posts ayant pour 'post_type' -> 'formation'
		$posts = Post::published()->where('post_type', 'formation')->paginate($this->paginate);
		return view('front.formation', ['posts' => $posts]);
	}
	// Recherche
   	public function searchFormation(Request $request){
  		$query = $request->search;
  		$posts = Post::published()->where('titre', 'LIKE', '%' . $query . '%')->paginate($this->paginate);
		return view('front.formation', compact('posts'));
   	}
	// Page Contact
   	public function contact(){
        	return view('front.contact');
   	} 
   	// Envoie du formulaire de Contact
   	public function sendmail(Request $request){
   		$this->validate($request, [
			'email' => 'required|email',
			'message' => 'required|string'
       		]);
	 	Mail::to('admin@contact.fr')->send(new SendMail($request));
	 	return redirect()->route('sendmail')->with('message', __('Your mail has been sent'));
	}	 
}
