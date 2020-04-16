<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Space extends Model
{
    protected $guarded = [];

    /**
     * create table relation
     */
    public function photos()
    {
        return $this->hasMany(SpacePhoto::class, 'spaces_id', 'id');
    }
    
    /**
     * create table relation
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
