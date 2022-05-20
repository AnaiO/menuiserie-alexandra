<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestation extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'title',
        'description',
        'image_description',
        'image_id',
        'price',
        'active'
    ];

    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}
