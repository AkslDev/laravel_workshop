<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = [
		'categories_id',
		'status',
		'post_type', 
		'titre', 
		'description', 
		'start', 
		'end', 
		'price', 
		'max_users'
	];	
	public function scopePublished($query){
		return $query->where('status', 'publié');
	}
	public function categories(){
		return $this->belongsTo(Category::class);
	}
	public function pictures(){
		return $this->hasOne(Picture::class);
	}
}
