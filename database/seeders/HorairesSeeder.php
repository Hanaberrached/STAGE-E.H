<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HorairesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $horaires = [
            ['id' => uniqid(), 'time' => '08:00:00', 'display' => '8h00 - 8h30'],
            ['id' => uniqid(), 'time' => '08:30:00', 'display' => '8h30 - 9h00'],
            ['id' => uniqid(), 'time' => '09:00:00', 'display' => '9h00 - 9h30'],
            ['id' => uniqid(), 'time' => '09:30:00', 'display' => '9h30 - 10h00'],
            ['id' => uniqid(), 'time' => '10:00:00', 'display' => '10h00 - 10h30'],
            ['id' => uniqid(), 'time' => '10:30:00', 'display' => '10h30 - 11h00'],
            ['id' => uniqid(), 'time' => '11:00:00', 'display' => '11h00 - 11h30'],
            ['id' => uniqid(), 'time' => '11:30:00', 'display' => '11h30 - 12h00'],
            ['id' => uniqid(), 'time' => '12:00:00', 'display' => '12h00 - 12h30'],
            ['id' => uniqid(), 'time' => '13:30:00', 'display' => '13h30 - 14h00'],
            ['id' => uniqid(), 'time' => '14:00:00', 'display' => '14h00 - 14h30'],
            ['id' => uniqid(), 'time' => '14:30:00', 'display' => '14h30 - 15h00'],
            ['id' => uniqid(), 'time' => '15:00:00', 'display' => '15h00 - 15h30'],
            ['id' => uniqid(), 'time' => '15:30:00', 'display' => '15h30 - 16h00'],
            ['id' => uniqid(), 'time' => '16:00:00', 'display' => '16h00 - 16h30'],
            ['id' => uniqid(), 'time' => '16:30:00', 'display' => '16h30 - 17h00'],
        ];
            DB::table('horaires')->insert($horaires);
    }
}
