<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    public $fillable = ["category_id","designation","description","prix","image"];
    public function category()
    {
        return $this->belongTo(Category::class);
    }
}
