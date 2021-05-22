<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
//  use HasFactory;
 public $fillable = ["designation", "description"];
 public function product()
 {
     return $this->hasMany(Produit::class);
 }
}
