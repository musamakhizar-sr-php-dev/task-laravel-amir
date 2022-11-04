<?php

namespace Database\Seeders;
use Carbon\Carbon;
use DB;

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
        $array = [
            ['admin1','admin1@gmail.com','admin'],


        ];
        foreach ($array as $key => $value){
            $array2[] = [
                'name'  => $value[0],
                'email' => $value[1],
                'email_verified_at'  => $value[2],
                'password' => bcrypt('password'),
                'email_verified_at' => Carbon::now()->toDateTimeString(),
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ];
        }
        DB::table('users')->insert($array2);
    }
}
