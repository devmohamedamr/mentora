<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserHomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('home')->insert([
            'slogan'=>'mentora',
            'title'=>'mentora studio',
            'mission'=>'nothing',
            'qus'=>'asdasdasddsasad',
            'vision'=>'aswasdasdasdsad',
            'created_at'=>carbon::now(),
        ]);
    }
}
