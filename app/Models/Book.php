<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['author','title',',nbr_copies','points'];
    use HasFactory;


    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
