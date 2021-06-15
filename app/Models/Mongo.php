<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mongo extends Model
{

    protected $connection = 'mongodb';
    protected $table = 'raw_msg';
    use HasFactory;
}
