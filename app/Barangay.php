<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barangay extends Model
{
    protected $fillable = ['city_id', 'barangay_name','created_at','updated_at'];
}
