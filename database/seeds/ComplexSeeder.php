<?php

use Illuminate\Database\Seeder;

class ComplexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('complexes')->insert([
            'name' => 'مجتمع مسکونی یاس',
            'address' => 'مجیدیه شمالی - تپه شمس آباد - کوچه توحیدی - پلاک ۷',
            'units' => 20,
            'type' => 'normal',
            'created_at' => now(),
        ]);

    }
}
