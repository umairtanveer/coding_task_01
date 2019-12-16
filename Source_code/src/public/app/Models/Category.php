<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    public function exercise()
    {
        return $this->belongsTo('App\Models\Exercise');
    }

}
