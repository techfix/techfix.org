<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid', 
        'title', 
        'issue',
        'issueable_id',
        'issueable_type',
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'uuid';
    }

    /**
     * Get all of the owning issueable models.
     */
    public function issueable()
    {
        return $this->morphTo();
    }
}
