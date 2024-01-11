<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'pricing', 'category_id']; // Define fillable fields

    // Define relationships and other methods as needed
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
