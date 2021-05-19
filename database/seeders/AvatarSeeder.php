<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('avatars')->insert([
            ['name' => 'image_1.png'],  //1
            ['name' => 'image_2.png'],  //2
            ['name' => 'image_3.png'],  //3
            ['name' => 'image_4.png'],  //4
            ['name' => 'image_5.png'],  //5
        ]);
    }
}
