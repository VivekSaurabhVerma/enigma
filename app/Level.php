<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table = 'levels';
    public $primaryKey = 'id';
    public $timestamps = true;
}
