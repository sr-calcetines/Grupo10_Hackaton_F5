<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Housing extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'img',
        'name',
        'description',
        'rooms',
        'bedrooms',
        'bathrooms',
        'size',
        'price',
        'contactMail'
    ];
}
