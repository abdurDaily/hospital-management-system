<?php

namespace Database\Seeders;

use App\Models\DoctorData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $doctosData = new DoctorData();
        $doctosData->doctor_name = 'Dr. John Doe';
        $doctosData->doctor_dessignation = 'cardiologist';
        $doctosData->doctor_qualification = 'MBBS, FCPS, MD';
        $doctosData->doctor_number = '01647465050';
        $doctosData->doctor_email = 'abdur@gmail.com';
        $doctosData->doctor_about = 'nothing found..!';
        $doctosData->save();
    }
}
