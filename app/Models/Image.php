<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'description',
        'ative',
        'created_at',
        'updated_at',
    ];

    const VISIBLE = 1;
    const INVISIBLE = 0;

    public function prestations()
    {
        return $this->hasMany(Prestation::class);
    }

    public function realisations()
    {
        return $this->hasMany(Realisation::class);
    }
}
