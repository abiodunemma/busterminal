<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seat extends Model
{
    use HasFactory;
    protected $table = 'seats';

    protected $primaryKey = 'id';
    protected $fillable = [ 'username','userid', 'number'];

}
