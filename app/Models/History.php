<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = ['date_cmd','date_retour'];
    use HasFactory;

    public function demande()
    {
        return $this->belongsTo(Demande::class, 'demande_id');
    }
}
