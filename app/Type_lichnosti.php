<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str; //хелпер для генерации

class Type_lichnosti extends Model
{
    //protected список разрешонных полей для записей из формы и переменная
    // $fillable содержит разрешонные полей

    protected $fillable = ['title' ,'slug' , 'parent_id', 'publisher', 'parent_id',
      'created_by', 'modified_by'
    ];
    //Mutators. поле Slug будет автоматически формироватся
    public function setSlugAttribute($value)
      {
        $this->attributes['slug'] =Str::slug(mb_substr($this->title, 0, 40)."-".\Carbon\Carbon::now()->format('dmyHi'), '-');
      }
    function children(){
      return $this->hasMany(self::class,'parent_id');
    }
}
