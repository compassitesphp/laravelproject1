<?php

use Illuminate\Database\Seeder;

class AmazonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('amazons')->insert([[
            'item'=>'dress',
            'amount'=>'300'
            ],[
                'item'=>'shoes',
                'amount'=>'500'
                
            ],[
                'item'=>'shirt',
                'amount'=>'600'
            
         ]]);
    }
}
