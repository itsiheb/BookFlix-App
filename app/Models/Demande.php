<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    protected $fillable = [
        'member_id',
        'book_id',
        'date_cmd',
        'date_retour',
        'nbr_copies_cmd',
    ];
    use HasFactory;

    public function users()
    {
        return $this->hasMany(User::class, 'member_id');
    }

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }
}
