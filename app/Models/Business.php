<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function socialNetworks()
    {
        return $this->belongsToMany(SocialNetwork::class, 'socialnetwork_businesses')
            ->withPivot('link')
            ->withTimestamps();
    }
}
