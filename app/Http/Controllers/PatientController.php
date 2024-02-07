<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\User;
use App\Models\rendezvous;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Patient;

class PatientController extends Controller
{
    public function index()
    {
        
        $patients = User::where('id', '>=', 10)->get();
        // Récupérer tous les utilisateurs (patients) depuis la base de données pour lafficher chez les medecins
        $pageName = 'patients';
        return view('patients', compact('pageName','patients'));
    }



    // POUR LA FICHE PATIENT 
    public function getPatientInfo(Request $request, $id)
    {
       
       
        $patient = User::where('id', '=', $id)->first();
        return response()->json($patient);

       
    }
    // fin de la fiche patient 

public function getRendezvousCountUntilMidnight()
{
    $currentDateTime = Carbon::now();
    $endOfDay = $currentDateTime->copy()->endOfDay()->addDay();

    $rendezvousCount = Rendezvous::whereBetween('date', [$currentDateTime, $endOfDay])
        ->count();

    return $rendezvousCount;
}

    public function getCounts()
    {
        $usersCount = User::where('id', '>=', 10)->count();// compte le nombre de patients pour dashboardmed
        $rendezvousCountUntilMidnight = $this->getRendezvousCountUntilMidnight();
        $rdvCount =  rendezvous::count(); //compte tous les rdv effectués 
        $pageName = 'dashboardmed';
        $appointments = Rendezvous::with('patients')->where('doctor_id', Auth::user()->id)->get();//la c'est pour afficher les rendez vous selon les docteurs 
        $appointmentsCount = $appointments->count();//avec cette fonction je compte les rendez vous selon le doc pour affficher dans la dashboardmed
        return view('dashboardmed')->with('usersCount', $usersCount)->with('rdvCount', $rdvCount)->with('pageName', $pageName)->with('rendezvousCountUntilMidnight', $rendezvousCountUntilMidnight)->with('appointments', $appointments)->with('appointmentsCount', $appointmentsCount);


    } 
    public function indexh ()

    {
        $appointments = rendezvous::join('services', 'rendezvous.doctor_id', '=', 'services.doctor_id')
        ->where('rendezvous.patient_id', Auth::user()->id)
        ->get(['rendezvous.id', 'services.name', 'rendezvous.date', 'rendezvous.hour']);
//sert à pouvoir appeler le nom du service dans lhistorique patient
       $count = $appointments->count();
       // je compte le nombre de rendez vous pour pouvoir lafficher dans la dashboard 
    $pageName = 'dashboardpat';
    return view('dashboardpat', compact('pageName', 'appointments','count'));


    }
    
 //meme fonction que dans lhistorique cest juste que jessaye de compter le nombre de rdv emis par un meme patient pr lafficher dans la dashboard


 public function create()
 {
     $pageName = 'create';
     return view('patients.create', compact('pageName'));
 }
 
 public function store(Request $request)
 {
     // Validate the form data
     $validatedData = $request->validate([
         'name' => 'required',
         'email' => 'required|email|unique:users',
         'password' => 'required',
         'date_naissance' => 'required',
         'adresse' => 'required',
         // Add more validation rules as needed
     ]);

     // Create a new user
     $user = new User;
     $user->name = $request->name;
     $user->email = $request->email;
     $user->password = bcrypt($request->password);
     $user->date_naissance = $request->date_naissance;
     $user->adresse = $request->adresse;

     // Set other user properties

     // Save the user to the database
     $user->save();

     // Redirect to a success page or do something else
     return redirect()->route('patients.controller')->with('success', 'User created successfully');
 }
 public function getRendezvous($id)
 {
     $user = User::findOrFail($id);
     $rendezvous = $user->rendezvous;
     
     return response()->json($rendezvous);
 }
 public function show($id)
{
    $patient = User::findOrFail($id); // Assuming User model represents patients

    return response()->json($patient);
}

public function updateNotes(Request $request, $id)
{
    $patient = User::findOrFail($id);
    $patient->notes = $request->input('notes');
    $patient->save();

    return response()->json(['message' => 'Notes updated successfully']);
}

 

}

