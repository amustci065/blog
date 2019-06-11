<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use GrahamCampbell\Markdown\Facades\Markdown;

class Post extends Model
{
    
    protected $fillable = ['author_id','title', 'slug', 'excerpt', 'body', 'published_at', 'category_id', 'image'];
    protected $dates    = ['published_at'];
    

    public function author()
    {
        return $this->belongsTo(User::Class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Public function setPublishedAtAttribute($value)
    // {
    //     $this->attributes['published_at'] = $value ?: NULL;
    // }
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

 Public function getBodyHtmlAttribute($value)
 {

    return $this->body ? Markdown::convertToHtml (e($this->body)) : NULL;
 }

 Public function getExcerptHtmlAttribute($value)
 {

    return $this->excerpt ? Markdown::convertToHtml (e($this->excerpt)) : NULL;
 }

 Public function scopeLatestFirst($query)
 {
     return $query->orderBy('published_at', 'desc');
 }
  
 public function dateFormatted($showTimes = false)
 {
        $format = "d/m/Y";
        if ($showTimes) $format = $format . "H:i:s";
        return $this->created_at->format($format);
 }

 public function publicationLabel()
 {
    if (! $this->published_at) {
        return '<span class="label label-warning">Draft</span>';
    }
    elseif ($this->published_at && $this->published_at->isFuture()) {
        return '<span class="label label-info">Schedule</span>';
    }
    else {
        return '<span class="label label-success">Published</span>';
    }
 }

 Public function scopePopular($query)
 {
     return $query->orderBy('view_count', 'desc');
 }

 public function scopePublished($query)
{
	return $query->where("published_at", "<=", Carbon::now());
}

}
