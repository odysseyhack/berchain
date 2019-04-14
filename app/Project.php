<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'user_id'
    ];

    /**
     * @param Builder $query
     * @return $this
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * @param Builder $query
     * @return $this
     */
    public function transactions()
    {
        return $this->hasMany('App\Transaction');
    }

    /**
     * @param Builder $query
     * @return $this
     */
    public function donators()
    {
        return $this->hasMany('App\Donator');
    }

    /**
     * @param Builder $query
     * @return $this
     */
    public function kpis()
    {
        return $this->hasMany('App\Kpi');
    }
}
