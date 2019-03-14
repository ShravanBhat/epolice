<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Missingpeople extends Model
{
    protected $table='missingpeoples';

    public $primaryKey='id';

    public $timestamp=true;
}
