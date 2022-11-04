<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Product;

class Media extends Model
{
    use HasFactory;

    public function category(){
        return $this->morphMany(Category::class);
    }
    public function product(){
        return $this->morphMany(Product::class);
    }
}
