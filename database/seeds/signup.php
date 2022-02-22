<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class signup extends Seeder
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
                'remember_token' => Str::random(60),
                'username' => 'test coding',
                'name' => 'postman',
                'email' => 'test@coding.test',
                'encrypted_password' => Hash::make('123456'),
                'phone' => '0123456',
                'address' => 'assdasdasdasd',
                'city' => 'aaa',
                'country' => 'aaa',
                'postcode' => '12345',
            ));
        DB::table('users')->insert($data);
    }
}
