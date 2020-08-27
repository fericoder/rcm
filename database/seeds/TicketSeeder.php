<?php

use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (($handle = fopen ( public_path () . '/csv/requisitions.csv', 'r' )) !== FALSE) {

            while ( ($data = fgetcsv ( $handle, 10000, ',' )) !== FALSE ) {

                $complex_id = (int)trim($data[0]);
                $title = trim($data[1]);
                $description = trim($data[2]);
                $requestedFrom = trim($data[3]);
                $addedById = (int)trim($data[4]);
                $addedByName = trim($data[5]);
                $scope = trim($data[6]);
                $status = trim($data[7]);
                $attachment = trim($data[8]);
                $doerDescription = trim($data[9]);
                $doerfullName = trim($data[10]);
                $doerUserId = (int)trim($data[11]);

                $created_at = trim($data[12]);
                $updated_at = trim($data[13]);

                $startTime = new DateTime($created_at);
                $created_at = $startTime->format('Y-m-d H:i:s');

                $startTime = new DateTime($updated_at);
                $updated_at = $startTime->format('Y-m-d H:i:s');


                DB::table('tickets')->insert(
                    [

                        [
                            'complex_id' => 1,
                            'title' => $title,
                            'description' => $description,
                            'requestedFrom' => $requestedFrom,
                            'addedById' => $addedById,
                            'addedByName' => $addedByName,
                            'scope' => $scope,
                            'status' => $status,
                            'attachment' => $attachment,
                            'doerDescription' => $doerDescription,
                            'doerfullName' => $doerfullName,
                            'doerUserId' => $doerUserId,

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
