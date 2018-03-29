<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $table = 'tags';

    const TYPE_MEDIUM = 1;
    const TYPE_ACRYLIC = 2;
    const TYPE_OIL = 3;

}
