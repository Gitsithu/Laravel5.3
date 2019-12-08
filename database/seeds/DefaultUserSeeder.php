<?php

use Illuminate\Database\Seeder;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        // default admin password is 'aaaaaaaa'
        $objs = array(
            ['id'=>'1', 'name'=>'admin', 'password' =>'$2y$10$KDarx27N4/WgKdW5TOspmOXdpxFQe8OJaeDPq1V0XSsXodrWBgB02','email' =>'admin@gmail.com', 'role_id' =>'1']

        );

        DB::table('users')->insert($objs);
    }
}
