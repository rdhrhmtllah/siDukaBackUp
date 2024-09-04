<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\laporan>
 */
class LaporanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            [
                "user_id" => 1,
                "judulKejadian" => "judul",
                "nohp" => "123123123123123",
                "lokasi" => "lokasi",
                "foto" => "C:\Users\rdhrh\AppData\Local\Temp\phpDA8F.tmp",
                "urgensi" => "0",
                "kronologi" => "kronologi",
                "created_at" => "2024-08-16 18:45:44",
                "updated_at" => "2024-08-16 18:45:44",

            ],
            [

                "user_id" => 1,
                "judulKejadian" => "anu",
                "nohp" => "213123123123",
                "lokasi" => "anu",
                "foto" => "C:\Users\rdhrh\AppData\Local\Temp\php1863.tmp",
                "urgensi" => "0",
                "kronologi" => "anu anu",
                "created_at" => "2024-08-16 18:46:00",
                "updated_at" => "2024-08-16 18:46:00",

            ],
            [

                "user_id" => 1,
                "judulKejadian" => "pembullyan anak di gotong kucing",
                "nohp" => "123123123123",
                "lokasi" => "Sungaisahang",
                "foto" => "C:\Users\rdhrh\AppData\Local\Temp\php5C53.tmp",
                "urgensi" => "0",
                "kronologi" => "kasian anak nya di gotong kucing!!",
                "created_at" => "2024-08-16 18:46:17",
                "updated_at" => "2024-08-16 18:46:17",

            ],
        ];
    }
}
