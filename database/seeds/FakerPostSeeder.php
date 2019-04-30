<?php

use Illuminate\Database\Seeder;

class FakerPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Model\Post::class)->times(100)->make()->
            each(function($model){
                $model->save();
        });
    }
}
