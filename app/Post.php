<?php

namespace App;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dates = ['published_at'];

    public function author()
    {
        return $this->belongsTo(User::Class);
    }
    // images path
    Public function getImageUrlAttribute($Value)
    {
        $imageUrl = "";

    if ( ! is_null($this->image))
    {
        $imagePath = public_path(). "/img/" . $this->image;
	    if (file_exists($imagePath)) $imageUrl = asset("img/" . $this->image);
    }
    return $imageUrl;
 }

 Public function getDateAttribute($value)
 {
     return is_null($this->published_at) ? '' : $this->published_at->diffForHumans();
     //$this->created_at->diffForHumans();
 }

 Public function scopeLatestFirst($query)
 {
     return $query->orderBy('published_at', 'desc');
 }

 public function scopePublished($query)
{
	return $query->where("published_at", "<=", Carbon::now());
}

}
