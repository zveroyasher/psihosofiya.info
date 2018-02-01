<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Article extends Model

{
  // $fillable содержит разрешонные полей

  protected $fillable = ['title' ,'slug' , 'description_short','description','image','image_show','meta_title',
  'meta_description','meta_keyword', 'publisher','created_by', 'modified_by'];
      //Mutators. поле Slug будет автоматически формироватся
    public function setSlugAttribute($value)
      {
        $this->attributes['slug'] =Str::slug(mb_substr($this->title, 0, 40)."-".\Carbon\Carbon::now()->format('dmyHi'), '-');
      }
      
    public function type_lichnostis()
    {
      return $this->morphToMany('App\Type_lichnosti','typenaticles' )
    }
}
