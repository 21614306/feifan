<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Authentication extends Model
{
	use HasDateTimeFormatter;   

public function articles()
{
	return $this->hasMany('App\Models\Article','owner_id');
}
	 }
