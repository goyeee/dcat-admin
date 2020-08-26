<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'article';

    protected $primaryKey = 'articleid';

    public $timestamps = false;

}
