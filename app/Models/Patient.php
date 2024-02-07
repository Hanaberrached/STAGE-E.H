<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Patient extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nom',
        'email',
        'date_naissance',
        'adresse',
        'username',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    public function rendezvous()
{
    return $this->hasMany(Rendezvous::class, 'patient_id');
}

}
