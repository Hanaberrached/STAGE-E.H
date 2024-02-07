<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'date_naissance',
        'adresse',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function Services()
     {
        return $this->hasMany(Services::class,'user_id');
     }
     
     public function rendezvousAsPatient()
     {
         return $this->hasMany(rendezvous::class, 'patient_id');
     }
     public function rendezvous()
{
    return $this->hasMany(Rendezvous::class, 'patient_id');
}

 
    //  public function rendezvousAsDoctor()
    //  {
    //      return $this->hasMany(rendezvous::class, 'doctor_id');
    //  }
}
