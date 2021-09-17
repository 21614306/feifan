<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class ArticleType extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'article_type';
    
}
