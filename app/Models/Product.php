<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;
    public $table = "products";

   /**
    * Get the user that owns the product
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function brand(): BelongsTo
   {
       return $this->belongsTo(Brand::class);
   }

}
