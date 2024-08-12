<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            'name' => "Polres Kutai Barat",
            'description' => "Website Resmi Polres Kutai Barat",
            'phone' => "-",
            'keyword' => "polisi, kutai barat, informasi, berita",
            'logo' => "-",
            'email' => "-",
            'link_yt' => "-",
            'link_fb' => "-",
            'link_ig' => "-",
            'address' => "Kutai Barat",
            'created_at' => now()
        ]);
    }
}
