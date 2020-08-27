<?php

use Illuminate\Database\Seeder;

class ProceedingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (($handle = fopen ( public_path () . '/csv/approvals.csv', 'r' )) !== FALSE) {

            while ( ($data = fgetcsv ( $handle, 10000, ',' )) !== FALSE ) {


                $created_at = trim($data[5]);
                $updated_at = trim($data[6]);

                $startTime = new DateTime($created_at);
                $created_at = $startTime->format('Y-m-d H:i:s');

                $startTime = new DateTime($updated_at);
                $updated_at = $startTime->format('Y-m-d H:i:s');


                DB::table('proceedings')->insert(
                    [

                        [
                            'date' => trim($data[1]),
                            'type' => trim($data[3]),
                            'number' => trim($data[2]),
                            'file' => trim($data[4]),
                            'complex_id' => 1,

                            'created_at' => $created_at,
                            'updated_at' => $updated_at,
                        ],
                    ]
                );

            }

            fclose ( $handle );
        }
    }
}
