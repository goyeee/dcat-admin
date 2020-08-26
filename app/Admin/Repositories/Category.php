<?php

namespace App\Admin\Repositories;

use App\Models\Category as Model;
use Dcat\Admin\Repositories\EloquentRepository;

use Illuminate\Support\Facades\DB;
class Category extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;

    public function topCategory()
    {
	$list = DB::table('category')->where('parentid',0)->get()->all();
	return array_column($list, 'categoryname','categoryid');
    }

    public function parentname($parentid)
    {
        return DB::table('category')->where('parentid',$parentid)->value('categoryname');
    }
}
