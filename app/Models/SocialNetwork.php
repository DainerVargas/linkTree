<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialNetwork extends Model
{



    public function businesses()
    {
        return $this->belongsToMany(Business::class, 'socialnetwork_businesses')
            ->withPivot('link')
            ->withTimestamps();
    }
}
