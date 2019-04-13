<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kpi extends Model
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
