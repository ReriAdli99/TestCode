<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class shopping extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            array(
                'name' => 'new shopping',
            ));
        DB::table('shoppings')->insert($data);
    }
}
