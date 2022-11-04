<?php

namespace Database\Seeders;

use App\Models\Products;
use DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
        Products::factory(50)->create();
    }
}
