<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Use guarded to protect mass assignment
class Appointment extends Model {
    protected $guarded = [];
}
