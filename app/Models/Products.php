<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Media;

class Products extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsToMany(Category::class);
    }
    public function media(){
        return $this->morphTo(Media::class);
    }
}
