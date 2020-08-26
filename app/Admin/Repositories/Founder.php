<?php

namespace App\Admin\Repositories;

use App\Models\Founder as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Founder extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
