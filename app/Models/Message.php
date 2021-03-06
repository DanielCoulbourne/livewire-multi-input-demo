<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $casts = ['recipients' => AsCollection::class];
}
