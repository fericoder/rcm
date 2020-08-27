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
                $code = trim($data[4]);
                $parkingCode = trim($data[5]);
                $parkingCount = trim($data[6]);
                $complex_id = trim($data[7]);
                $area = trim($data[8]);
                $terasArea = trim($data[9]);
                $charge = trim($data[10]);
                $mobileNumber = trim($data[11]);
                $phone1 = trim($data[12]);
                $phone2 = trim($data[13]);
                $userType = trim($data[14]);
                $userStatus = trim($data[15]);
                $propertyStatus = trim($data[16]);
                $residentType = trim($data[17]);
                $tenant = trim($data[18]);
                $tenantMobile = trim($data[19]);
                $email = trim($data[20]);
                $password = trim($data[21]);
                $remember = trim($data[22]);
                $avatar = trim($data[23]);
                $Ispasswordchanged = trim($data[24]);
                $createdAt = now();

                DB::table('users')->insert(
                    [

                        [
                            'fullName' => $fullName,
                            'tower' => $tower,
                            'floor' => $floor,
                            'unit' => $unit,
                            'code' => $code,
                            'parking_code' => $parkingCode,
                            'parking_count' => $parkingCount,
                            'complex_id' => $complex_id,
                            'area' => $area,
                            'backyardArea' => $terasArea,
                            'charge' => $charge,
                            'mobile' => $mobileNumber,
                            'phone1' => $phone1,
                            'phone2' => $phone2,
                            'userType' => $userType,
                            'userStatus' => $userStatus,
                            'propertyStatus' => $propertyStatus,
                            'residentType' => $residentType,
                            'tenantFullName' => $tenant,
                            'tenantMobileNumber' => $tenantMobile,
                            'email' => $email,
                            'password' => $password,
                            'remember_token' => $remember,
                            'avatar' => $avatar,
                            'lastLogin' => null,
                            'lastAction' => null,
                            'isPasswordChanged' => $Ispasswordchanged,
                            'created_at' => now(),
                            'updated_at' => null,
                        ],
                    ]
                );

            }

            fclose ( $handle );
        }
    }
}
