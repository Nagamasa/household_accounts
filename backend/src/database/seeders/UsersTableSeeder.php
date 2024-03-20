<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use DB;
use App\Models\User;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            'id' => (string)Str::uuid(),
            'name' => '永野',
            'email' => 'nagano@test.com',
            'password' => Hash::make('password')
        ];
        DB::table('users')->insert($data);
    }
}
