<?php

use Illuminate\Database\Seeder;

class MonitoringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (($handle = fopen ( public_path () . '/csv/monitorings.csv', 'r' )) !== FALSE) {

            while ( ($data = fgetcsv ( $handle, 10000, ',' )) !== FALSE ) {


                $created_at = trim($data[5]);
                $updated_at = trim($data[6]);

                $startTime = new DateTime($created_at);
                $created_at = $startTime->format('Y-m-d H:i:s');

                $startTime = new DateTime($updated_at);
                $updated_at = $startTime->format('Y-m-d H:i:s');


                DB::table('invoices')->insert(
                    [

                        [
                            'date' => $date,
                            'user_id' => $user_id,
                            'hour_from' => $hour_from,
                            'hour_to' => $hour_to,
                            'camera_active_before' => $camera_active_before,
                            'camera_active_after' => 1,

                            'created_at' => $created_at,
                            'updated_at' => $updated_at,
                        ],
                    ]
                );

            }

            fclose ( $handle );
        }
    }}
