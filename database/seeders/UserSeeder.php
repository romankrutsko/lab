<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $User = User::updateOrCreate(
            ['email' => "romakrutsik@gmail.com"],
            [
                'name' => "Roman Krutsko",
                'password' => bcrypt('12345678'),
                'email' => "romakrutsik@gmail.com"
            ]
        );
    }
}
