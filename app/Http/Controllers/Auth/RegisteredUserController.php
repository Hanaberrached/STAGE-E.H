<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Laravolt\Avatar\Avatar;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'date_naissance' => ['required', 'date'],
            'adresse'=> ['required', 'string', 'max:255']
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'date_naissance' => $request->date_naissance,
            'adresse'=>$request->adresse
        ]);

        event(new Registered($user));
        $user->sendEmailVerificationNotification();

        $avatar = new Avatar();
        $name = ucwords(strtolower($request->name)); // Convertit le nom en minuscules puis met en majuscules la première lettre de chaque mot
        $avatar->create($name)->setBackground('#6097FF')->save(public_path('avatars/' . $user->id . '.png'));
        
        
        Auth::login($user);

    return redirect()->route('dashboardpat');       
    }
}
