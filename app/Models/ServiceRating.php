<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceRating extends Model
{
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
