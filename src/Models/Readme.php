<?php

namespace Codedcell\RealeaseNotes\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Readme extends Model
{
    use HasFactory;
    protected $casts = [
        'notify' => 'array',
    ];
}
