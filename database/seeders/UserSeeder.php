<?php

namespace Database\Seeders;

use App\Models\User;
use Laravolt\Avatar\Avatar;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Dotenv\Util\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        

        $user22 = User::create([
            'name' => 'Médecin Cardiologue ',
            'email' => 'med.cardio@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('medpass'), // password

        ]);

        $user1 = User::create([
            'name' => 'Médecin Rhumatologue',
            'email' => 'med.rhumato@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('medpass'), // password

        ]);

        $user2 = User::create([
            'name' => 'Médecin Nefrologue ',
            'email' => 'med.nefro@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('medpass'), // password

        ]);


        $user3 = User::create([
            'name' => 'Médecin Infectiologue ',
            'email' => 'med.infectio@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('medpass'), // password

        ]);

        $user8 = User::create([
            'name' => 'Médecin Pneumologue ',
            'email' => 'med.pneumo@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('medpass'), // password

        ]);

        $user4 = User::create([
            'name' => 'Médecin Hematologue',
            'email' => 'med.hemato@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('medpass'), // password

        ]);

        $user5 = User::create([
            'name' => 'Médecin Immunoallergologue',
            'email' => 'med.immuno@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('medpass'), // password

        ]);

        $user6 = User::create([
            'name' => 'Médecin Dermatologue ',
            'email' => 'med.dermato@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('medpass'), // password

        ]);

        $user7 = User::create([
            'name' => 'Médecin Gériatre ',
            'email' => 'med.geriatrie@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('medpass'), // password

        ]);
   
        $user11 = User::create([
            'name' => 'Hana ',
            'email' => 'sissy.hana@yahoo.com',
            'email_verified_at' => now(),
            'password' => Hash::make('medpass'), // password

        ]);


        }

    }

