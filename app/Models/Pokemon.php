<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $filhable = [
        'neme',
        'type',
        'power'
    ];
}
