<?php

use Illuminate\Database\Seeder;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([[
            'teacher_name'=>'First teacher',
            'department'=>'Maths'
        ],[
            'teacher_name'=>'Second teacher',
            'department'=>'Science'            
        ],[
            'teacher_name'=>'Third teacher',
            'department'=>'History'            
        ]]);
    }
}
