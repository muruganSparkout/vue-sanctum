<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use BinaryCabin\LaravelUUID\Traits\HasUUID;

class Employee extends Model
{
    protected $uuidFieldName = 'id';

    use HasUUID;
    protected $casts = [
        'id' => 'string'
    ];
}
