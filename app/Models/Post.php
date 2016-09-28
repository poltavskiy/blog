<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'preview_text',
        'detail_text',
        'preview_image',
        'active'
    ];

    public function getPublished(){
        return $this->orderBy('created_at')->published()->paginate(5);
    }

    public function scopePublished($query){
        $query->where('active', 1);
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }
}
