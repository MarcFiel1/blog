<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Tag;
use App\Role;
use App\category;

class Post extends Model
{
    protected $fillable=['title','contents','user_id','category_id'];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
    
    public function comments(){
        return $this->hasMany(Comments::class);
    }
    
}
