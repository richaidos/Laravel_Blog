<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class Category extends Model
{

    //protected $fillable = ['title', 'slug', 'parent_id','published', 'created_by', 'modified_by'];
    protected $guarded = [];

    public function setSlugAttribute($value){
        $this->attributes['slug'] = Str::slug( mb_substr($this->title, 0, 40) . "-" . \Carbon\Carbon::now()->format('dmyHi'), '-');
        $this->attributes['created_by'] = (int)Auth::id();
    }


    public function children(){
        return $this->hasMany(self::class, 'parent_id');
    }


}
