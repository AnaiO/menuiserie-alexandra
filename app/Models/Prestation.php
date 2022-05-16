<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestation extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}
