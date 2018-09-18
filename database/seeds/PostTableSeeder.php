<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(){
		// factory(\App\Post::class, 30) -> create();
		Storage::disk('local')->delete(Storage::allFiles());
		factory(App\Post::class, 30)->create()->each(function($post){
			//Pour les images: ne pas oublier le champs post_id
			$link = str_random(12) . '.jpg';

			$file = file_get_contents('http://via.placeholder.com/250x250/' . rand(1, 9));
			Storage::disk('local')->put($link, $file);

			$post->pictures()->create([
				'title' => 'Default', //Valeur par défaut
				'link' => $link, 
			]);
			$post->save();
    		});
	}
}
