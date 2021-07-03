<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array(
                'name'          =>  'Admin',
                'email'         =>  'admin@admin.com',
                'password'      =>  bcrypt('admin123'),
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ),
        );
        DB::table('users')->insert($data);
    }
}
