<?php

use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (($handle = fopen ( public_path () . '/csv/invoices.csv', 'r' )) !== FALSE) {

            while ( ($data = fgetcsv ( $handle, 10000, ',' )) !== FALSE ) {


                $amount =  (int) trim($data[0]);
                $for = trim($data[1]);
                $code = trim($data[2]);
                $user_id = trim($data[3]);
                $status = trim($data[4]);
                $created_at = trim($data[5]);
                $updated_at = trim($data[6]);

                $startTime = new DateTime($created_at);
                $created_at = $startTime->format('Y-m-d H:i:s');

                $startTime = new DateTime($updated_at);
                $updated_at = $startTime->format('Y-m-d H:i:s');


                DB::table('invoices')->insert(
                    [

                        [
                            'amount' => $amount,
                            'for' => $for,
                            'code' => $code,
                            'user_id' => $user_id,
                            'status' => $status,
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
