<?php

namespace App\Http\Controllers;
use App\Models\ServiceRating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }
    public function rate(Request $request, Service $service)
{
    $rating = new ServiceRating();
    $rating->service_id = $service->id;
    $rating->user_id = Auth::id();
    $rating->rating = $request->input('rating');
    $rating->save();

    return redirect()->back();
}
}
