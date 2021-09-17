<?php

namespace App\Admin\Repositories;

use App\Models\ArticleType as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class ArticleType extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
