<?php

use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
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
                'plate_no'      =>  'XSA 723',
                'current_color' =>  'Blue',
                'target_color'  =>  'Green',
                'status'        =>  1,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ),
            array(
                'plate_no'      =>  'ABS 092',
                'current_color' =>  'Red',
                'target_color'  =>  'Blue',
                'status'        =>  1,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ),
            array(
                'plate_no'      =>  'JSL 110',
                'current_color' =>  'Red',
                'target_color'  =>  'Green',
                'status'        =>  1,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ),
            array(
                'plate_no'      =>  'XHJ 989',
                'current_color' =>  'Green',
                'target_color'  =>  'Blue',
                'status'        =>  1,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ),
            array(
                'plate_no'      =>  'HSU 005',
                'current_color' =>  'Blue',
                'target_color'  =>  'Red',
                'status'        =>  1,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ),


            array(
                'plate_no'      =>  'KKL 989',
                'current_color' =>  'Blue',
                'target_color'  =>  'Green',
                'status'        =>  0,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ),
            array(
                'plate_no'      =>  'HJR 279',
                'current_color' =>  'Red',
                'target_color'  =>  'Blue',
                'status'        =>  0,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ),
            array(
                'plate_no'      =>  'FGL 116',
                'current_color' =>  'Red',
                'target_color'  =>  'Green',
                'status'        =>  0,
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ),
        );
        DB::table('cars')->insert($data);
    }
}
