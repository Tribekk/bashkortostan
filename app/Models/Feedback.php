<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'destination',
        'body',
        'files',
        'FIO',
        'number',
        'email',
        'isVisible',
        'message'
    ];
}
