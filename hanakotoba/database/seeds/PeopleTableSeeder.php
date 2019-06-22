<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'kento',
            'mail' => 'kento@yamada',
            'age' => 22,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'izumi',
            'mail' => 'izumi@yamazaki',
            'age' => 30,
        ];
        DB::table('table')->insert($param);
    }
}
