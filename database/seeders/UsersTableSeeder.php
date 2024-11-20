<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Model\User;
use DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'id' =>'10',
            'name'	=> 'farijan',
            'email'	=>  'ijan@gmail.com',
            'password'	=> bcrypt('123123123')
    ]);
        
    }
}
