<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class result extends Model
{
    use HasFactory;

    protected $filable = [
        'letter_id',
        'notes',
        'presence_recipients',
    ];
    
}
