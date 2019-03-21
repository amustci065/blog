<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function author()
    {
        return $this->belongsTo(User::Class);
    }
    // images path
    Public function getImageUrlAtrribute($Value)
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
     return $this->created_at->diffForHumans();
 }

 Public function scopeLatestFirst($value)
 {
     return $this->orderBy('created_at', 'desc');
 }


}
