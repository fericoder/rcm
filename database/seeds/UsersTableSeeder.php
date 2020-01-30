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
        if (($handle = fopen ( public_path () . '/csv/olyusers.csv', 'r' )) !== FALSE) {

            while ( ($data = fgetcsv ( $handle, 10000, ',' )) !== FALSE ) {


                $fullName = trim($data[0]);
                $tower = trim($data[1]);
                $floor = trim($data[2]);
                $unit = trim($data[3]);
                $area = trim($data[4]);
                $charge = trim($data[5]);
                $mobile1 = trim($data[6]);
                $phone1 = trim($data[7]);
                $phone2 = trim($data[8]);
                $code = trim($data[9]);


                DB::table('users')->insert(
                    [

                        [
                            'fullName' => $fullName,
                            'tower' => $tower,
                            'floor' => $floor,
                            'unit' => $unit,
                            'code' => $code,
                            'area' => $area,
                            'complex_id' => 1,
                            'charge' => $charge,
                            'mobile1' => $mobile1,
                            'phone1' => $phone1,
                            'phone2' => $phone2,

                            'password' => bcrypt('123456'),
                            'created_at' => now(),
                        ],
                    ]
                );

            }

            fclose ( $handle );
        }
    }
}
