<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
	protected $primaryKey = 'province_id';

    protected $fillable = ['province_name','created_at','updated_at'];
}
