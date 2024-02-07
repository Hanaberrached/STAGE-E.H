<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rendezvous extends Model
{
    use HasFactory ;

    protected $fillable = [
        'doctor_id',
        'patient_id',
        'service',
        'typeconsultation',
        'motif',
        'date',
        'hour',
    ];
    protected $table= "rendezvous";

   

    public function patients()
    {
        return $this->belongsTo(User::class, 'patient_id');
    }
    

    

    // public function doctor()
    // {
    //     return $this->belongsTo(User::class, 'doctor_id');
    // }
}
