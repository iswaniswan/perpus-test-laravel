<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    // lazy loading, improve eficiency query into database
    protected $with = [
        'author', 'category', 'publisher'
    ];

    
    public function author() 
    {
        return $this->belongsTo(Author::class);
    }

    
    public function category() 
    {
        return $this->belongsTo(Category::class);
    }
    

    public function publisher() 
    {
        return $this->belongsTo(Publisher::class);
    }
    
}
