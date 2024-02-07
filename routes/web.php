<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RendezvousController;
use App\Http\Controllers\ServiceController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('accueil');
})->name('accueil');

Route::get('/cardiologie', function () {
    return view('cardiologie');
});
Route::get('/rhumatologie', function () {
    return view('rhumatologie');
});
Route::get('/nephrologie', function () {
    return view('nephrologie');
});
Route::get('/infectiologie', function () {
    return view('infectiologie');
});
Route::get('/pneumologie', function () {
    return view('pneumologie');
});
Route::get('/hematologie', function () {
    return view('hematologie');
});
Route::get('/immunoallergologie', function () {
    return view('immunoallergologie');
});
Route::get('/dermatologie', function () {
    return view('dermatologie');
});
Route::get('/geriatrie', function () {
    return view('geriatrie');
});
Route::get('/dons', function () {
    return view('dons');
});

Route::get('/confirmed', function () {
    $pageName='rdv';
    return view('confirmed',compact('pageName'));
});





Route::get('/inscription', function () {
    return view('inscription');
});
Route::get('/connexion', function () {
    return view('connexion');
});
// Route::get('/rendezvous', function () {
//     $pageName='rdv';

//     return view('rendezvous', compact('pageName'));
// });



Route::post('/formulaire',[RendezvousController::class, 'store'])->name('store');

Route::get('/resultats', function () {
    $pageName='results';
    return view('resultats',compact('pageName'));
});






Route::middleware(['auth','doctor'])->group(function () {
    Route::get('/dashboardmed', function () {
        $pageName = 'dashboardmed';
        return view('dashboardmed', compact('pageName'));
    })->name('dashboardmed');

    Route::get('/dashboardmed', [PatientController::class, 'getCounts'])->name('dashboardmed');

    Route::get('/patients', [PatientController::class, 'index'])->name('patients.controller');
    Route::get('/PatientInfo/{id}', [PatientController::class, 'getPatientInfo'])->name('PatientInfo');
    
    Route::get('/historiquem', function () {
        $pageName='historym';
        return view('historiquem', compact('pageName'));
    });
    Route::get('/planning', [DoctorController::class, 'index'])->name('planning');

        Route::get('/patients/create', [PatientController::class, 'create'])->name('patients.create');
        Route::post('/patients', [PatientController::class, 'store'])->name('patients.store');
        Route::get('/patients/{id}/rendezvous', [PatientController::class, 'getRendezvous'])->name('patients.rendezvous');
        Route::get('/patients/{id}', [PatientController::class, 'show'])->name('patients.show');
        Route::put('/patients/{id}/notes', [PatientController::class, 'updateNotes'])->name('patients.updateNotes');



});


Route::middleware(['auth', 'patient','verified'])->group(function () {
    Route::get('/dashboard2', function () {
        $pageName = 'dashboardpat';
        
        if (Auth::check()) {
            return view('master', compact('pageName'));
        } else {
            return redirect()->route('accueil');
        }
    })->middleware('auth');
    
    Route::get('/dashboardpat', [PatientController::class, 'indexh'])->name('dashboardpat');
    Route::get('/rendezvous',[RendezvousController::class, 'index'])->name('index');
    Route::get('/historique', [DoctorController::class, 'indexh'])->name('historique');
    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
    Route::post('/services/{service}/rate', [ServiceController::class, 'rate'])->name('services.rate');
});




















Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


