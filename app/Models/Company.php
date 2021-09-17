<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'companys';


    public function articles()
    {
    	$this->hasMany('App\Models\Article');
    }
    
}
