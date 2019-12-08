<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('student')->delete();
        
        $roles = array(
            ['id'=>1, 'name'=>'Admin'],
            ['id'=>2, 'name'=>'Manager']
        );

        DB::table('student')->insert($roles);
    }
}
