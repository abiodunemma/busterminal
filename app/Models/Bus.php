<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;
    protected $table = 'busses';

    protected $primaryKey = 'id';

    protected $fillable = ['userid', 'username', 'date', 'origin', 'destination'];
}
