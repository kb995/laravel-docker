<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;

class Memo extends Model
{
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
