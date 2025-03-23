<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB ;
class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'id'=>1,
            'name'=>'admin'
        ]);
        DB::table('roles')->insert([
            'id'=>2,
            'name'=>'vendor'
        ]);
        DB::table('roles')->insert([
            'id'=>3,
            'name'=>'customer'
        ]);
    }
}
