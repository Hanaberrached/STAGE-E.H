<?php

namespace App\Http\Controllers;

use App\Models\Services;
use App\Models\Rendezvous;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RendezvousController extends Controller
{
    public function index()
    {
        $client = Auth::user();
        $services = Services::all();
        $pageName = 'rdv';
        return view('rendezvous', compact('pageName', 'client', 'services'));
    }

    public function store(Request $request)
    {
        $selectedServiceId = $request->input('ServicePriority');
        $selectedService = Services::find($selectedServiceId);

        // Check if a service is selected
        if (!$selectedService) {
            return redirect()->route('index')->with('error', 'Veuillez sélectionner un service.');
        }

        $client = Auth::user();
        $services = Services::all();
        $pageName = 'rdv';

        $appointment = Rendezvous::where('date', $request->input('meeting-date'))
            ->where('hour', $request->input('meeting-time'))
            ->where('doctor_id', $selectedService->doctor_id)
            ->first();

        if ($appointment) {
            return redirect()->route('index')->with('error', "L'horaire du rendez-vous n'est pas disponible pour cette date.");
        }

        $rdv = Rendezvous::create([
            'doctor_id' => $selectedService->doctor_id,
            'patient_id' => $client->id,
            'typeconsultation' => $request->input('typedeconsultation'),
            'date' => $request->input('meeting-date'),
            'hour' => $request->input('meeting-time'),
            'motif' => $request->input('motif'),
        ]);

        // Flash a success message
        session()->flash('success', 'Votre rendez-vous a été confirmé avec succès!');

        return redirect()->route('index');
    }
}
