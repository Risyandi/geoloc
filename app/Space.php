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

    /**
     * get spaces using haversine formula for getting nearby location
     */
    public function getSpaces($latitude, $longitude, $radius)
    {
        return $this->select('spaces.*')
            ->selectRaw(
                '(6371 * 
                    acos(cos(radians(?)) *
                        cos(radians(latitude))*
                        cos(radians(longitude) - radians(?)) +
                        sin(radians(?))*
                        sin(radians(latitude))
                        )
                    ) AS distance', [$latitude, $longitude, $latitude]
            )
            ->havingRaw("distance < ?", [$radius])
            ->orderBy('distance', 'asc');
    }
}
