<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\rendezvous;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function index()

    {
        
        
        $appointments = rendezvous::with('patients')->where('doctor_id', Auth::user()->id)->get();
        
        // Récupérer tous les utilisateurs (patients) depuis la base de données ayant effectué un rdv selon le med
        $pageName = 'planning';
        return view('planning', compact('pageName','appointments'));
     
}




    public function indexh ()
    {
        $appointments = rendezvous::join('services', 'rendezvous.doctor_id', '=', 'services.doctor_id')
        ->where('rendezvous.patient_id', Auth::user()->id)
        ->get(['rendezvous.id', 'services.name', 'rendezvous.date', 'rendezvous.hour']);
        // ca affiche tous les rendez vous du patients avec le nom du service dans l'historique du patient

       $count = $appointments->count();
       // je compte le nombre de rendez vous au total pour pouvoir lafficher dans 
    $pageName = 'history';
    return view('historique', compact('pageName', 'appointments','count'));

}


}
