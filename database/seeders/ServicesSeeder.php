<?php

namespace Database\Seeders;

use App\Models\Services;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $service = Services::create([
            'name' => 'Cardiologie',
            'doctor_id'=>1,
        ]);

        $service1 = Services::create([
            'name' => 'Rhumatologie',
            'doctor_id'=>2,
        ]);

        $service2 = Services::create([
            'name' => 'Nefrologie',
            'doctor_id'=>3,
        ]);

        $service3 = Services::create([
            'name' => 'Infectiologie',
            'doctor_id'=>4,
        ]);

        $service4 = Services::create([
            'name' => 'Pneumologie',
            'doctor_id'=>5,
        ]);

        $service5 = Services::create([
            'name' => 'Hematologie',
            'doctor_id'=>6,
        ]);

        $service6 = Services::create([
            'name' => 'Immunoallergologie',
            'doctor_id'=>7,
        ]);


        $service7 = Services::create([
            'name' => 'Dermatologie',
            'doctor_id'=>8,
        ]);

        $service8 = Services::create([
            'name' => 'Gériatrie',
            'doctor_id'=>9,
        ]);
    }
}
