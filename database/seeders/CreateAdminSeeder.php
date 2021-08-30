<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\DatabaseSeeder;     // import
use Illuminate\Support\Facades\DB;      // from Web Site
use Illuminate\Support\Facades\Hash;    // from Web Site

class CreateAdminSeeder extends Seeder

// php artisan make:seed CreateAdminSeeder
// php artisan db:seed --class= CreateAdminSeeder
// php artisan migrate:fresh --seed // clear and insert
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Ahmad Arbasha',
            'email' => 'ahmad@admin.com',
            'password' =>  Hash::make('12345678'),
        ]);
    }
}
