<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Subject;
use App\Models\Attdetail;
use App\Models\Attendance;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Subject::factory()->create(['name' => 'PBO']);
        Subject::factory()->create(['name' => 'Web']);
        Subject::factory()->create(['name' => 'Desk/Mob']);

        Kelas::factory()->create(['name' => 'Guru']);
        Kelas::factory()->create(['name' => '12 RPL 1']);
        Kelas::factory()->create(['name' => '12 RPL 2']);
        Kelas::factory()->create(['name' => '12 RPL 3']);

        User::factory()->create([
            'name' => 'Guru',
            'email' => 'guru@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'guru',
            'kelas_id' => '1',
        ]);
        User::factory()->create([
            'name' => 'Siswa 1',
            'email' => 'siswa@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'siswa',
            'kelas_id' => '2',
        ]);
        User::factory(10)->create();

        Attendance::factory(20)->create();
        Attdetail::factory(20)->create();
        // Attendance::factory()->create([
        //     'teacher_id' => 1,
        //     'subject_id' => 1,
        //     'kelas_id' => 2,
        //     'date' => date('Y-m-d'),
        //     'topic' => 'Test 100',
        // ]);
    }
}
