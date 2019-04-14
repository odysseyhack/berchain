<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donator extends Model
{
    /**
     * @param Builder $query
     * @return $this
     */
    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}
