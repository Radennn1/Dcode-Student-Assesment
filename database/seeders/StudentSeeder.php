<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kosongkan tabel sebelum diisi untuk menghindari duplikat jika seeder dijalankan lebih dari sekali
        DB::table('students')->truncate();

        $students = [
            ['full_name' => 'John Smith', 'email' => 'john.smith@university.edu', 'department' => 'Computer Science', 'enrollment_year' => 2022],
            ['full_name' => 'Emily Johnson', 'email' => 'emily.johnson@university.edu', 'department' => 'Business Administration', 'enrollment_year' => 2021],
            ['full_name' => 'Michael Williams', 'email' => 'michael.williams@university.edu', 'department' => 'Law', 'enrollment_year' => 2023],
            ['full_name' => 'Jessica Brown', 'email' => 'jessica.brown@university.edu', 'department' => 'English Literature', 'enrollment_year' => 2022],
            ['full_name' => 'David Jones', 'email' => 'david.jones@university.edu', 'department' => 'Computer Science', 'enrollment_year' => 2021],
            ['full_name' => 'Sarah Miller', 'email' => 'sarah.miller@university.edu', 'department' => 'Communication Studies', 'enrollment_year' => 2024],
            ['full_name' => 'Daniel Davis', 'email' => 'daniel.davis@university.edu', 'department' => 'Graphic Design', 'enrollment_year' => 2023],
            ['full_name' => 'Laura Garcia', 'email' => 'laura.garcia@university.edu', 'department' => 'Medicine', 'enrollment_year' => 2020],
            ['full_name' => 'James Rodriguez', 'email' => 'james.rodriguez@university.edu', 'department' => 'Business Administration', 'enrollment_year' => 2022],
            ['full_name' => 'Linda Martinez', 'email' => 'linda.martinez@university.edu', 'department' => 'Computer Science', 'enrollment_year' => 2023],
        ];

        // Looping untuk memasukkan data ke database
        foreach ($students as $student) {
            Student::create($student);
        }
    }
}
