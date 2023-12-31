<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movies extends Model
{
    use HasFactory;
    protected $table = 'movies';

    public function genre()
    {
        return $this->belongsTo(genre::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
