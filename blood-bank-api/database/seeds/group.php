<?php

use Illuminate\Database\Seeder;

class group extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('groups')->insert([['name'=>'A'],['name'=>'A+'],['name'=>'B'],['name'=>'B+'],['name'=>'AB'],['name'=>'AB+'],['name'=>'O'],['name'=>'O+'],]);
    }
}
