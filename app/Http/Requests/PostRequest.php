<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Post;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {        
        $rules = [
            'title'        => 'required',
            'slug'         => 'required|unique:posts,slug',
	        'body'         => 'required',
            'published_at' => 'date_format:Y-m-d H:i:s',
            'category_id'  => 'required',
            'image'      => 'required|image|mimes:jpg,jpeg,bmp,png',
        ];
    
        if ($this->isMethod('patch') || $this->isMethod('put')) 
        {
            $segments = $this->segments();
            $Pid = intval(end($segments));
            $rules = [
                'title'        => 'required',
                'slug'         => 'required|unique:posts,slug,$Pid',
                'body'         => 'required',
                'published_at' => 'date_format:Y-m-d H:i:s',
                'category_id'  => 'required',
                'image'      => 'required|image|mimes:jpg,jpeg,bmp,png',
            ];
        }
     return $rules;
    }
}

