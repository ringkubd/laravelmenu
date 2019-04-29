<?php

namespace Anwar\Laravelmenu\Models;

use Illuminate\Database\Eloquent\Model;

class LaravelMenuModel extends Model
{
    public function scopeActive($query){
        return $query->where("active",1);
    }
}
