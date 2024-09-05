<?php

namespace Database\Seeders;

use App\Models\laporan;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $admin = User::create([
            'name' => 'admin',
            'email' => 'rdh.rhmtllah@gmail.com',
            'alamat' => 'jl.admin plg',
            'nohp' => '0895620102962',
            'is_admin' => 1,
            'verified_at' => now(),
            'password' => Hash::make('admin'),
            'remember_token' => Str::random(10),
        ]);

        laporan::create([
            "user_id" => 1,
            "judulKejadian" => "judul",
            "nohp" => "123123123123123",
            "lokasi" => "lokasi",
            "foto" => "C:\Users\rdhrh\AppData\Local\Temp\phpDA8F.tmp",
            "urgensi" => "0",
            "kronologi" => "kronologi",
            "created_at" => "2024-08-16 18:45:44",
            "updated_at" => "2024-08-16 18:45:44",

        ]);

        Post::factory(100)->recycle($admin, User::factory(3)->create())->create();
    }
}
