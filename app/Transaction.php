<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'amount'
    ];

    /**
     * @param Builder $query
     * @return $this
     */
    public function kpis()
    {
        return $this->belongsTo('App\Project');
    }

    /**
     * @param Builder $query
     * @return $this
     */
    public function coin()
    {
        return $this->belongsTo('App\Coin');
    }

    /**
     * @param Builder $query
     * @return $this
     */
    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    /**
     * @param Builder $query
     * @return $this
     */
    public function donator()
    {
        return $this->belongsTo('App\Donator');
    }
}
