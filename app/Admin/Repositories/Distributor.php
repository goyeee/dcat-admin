<?php

namespace App\Admin\Repositories;

use App\Models\Distributor as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Distributor extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
