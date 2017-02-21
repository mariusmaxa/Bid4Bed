<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert(
            array(
                array('name' => 'Lodging', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
                array('name' => 'Client', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
                array('name' => 'Admin', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            ));
    }
}
