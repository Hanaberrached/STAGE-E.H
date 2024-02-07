<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function ratings()
    {
        return $this->hasMany(ServiceRating::class);
    }
}
