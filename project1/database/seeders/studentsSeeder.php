<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\students;


class studentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = new students;
        $students->name= 'Muskan Shrestha';
         $students->email = 'muskan@gmail.com';
         $students->roll_no= 9;
         $students->Temp_address='Maitidevi';
         $students->save();
    }
}
