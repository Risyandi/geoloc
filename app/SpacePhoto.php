<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpacePhoto extends Model
{
    /**
     * create table relation
     */
    protected $guarded = [];

    public function space()
    {
        return $this->belongsTo(Space::class, 'spaces_id', 'id');
    }
}
