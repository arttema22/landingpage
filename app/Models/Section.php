<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    /**
     * свойство $casts, чтобы указать,
     * что атрибут data должен обрабатываться как JSON
     */
    protected $casts = [
        'data' => 'json',
    ];
}
