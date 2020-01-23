<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'fName' => 'علی',
            'lName' => 'رحمانی',
            'code' => '16',
            'complex_id' => 1,
            'area' => 114,
            'charge' => 600000,
            'mobile1' => '09201010328',
            'phone1' => '22948281',
            'userType' => 'superAdmin',
            'userStatus' => 'enable',
            'propertyStatus' => 'resident',
            'residentType' => 'owner',
            'email' => 'rahmani@rieco.ir',
            'password' => bcrypt('0212202'),
            'residentType' => 'owner',
            'created_at' => now(),
        ]);

    }
}
