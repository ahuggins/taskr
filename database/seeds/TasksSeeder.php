<?php

use Illuminate\Database\Seeder;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < 5; $i++) {
    	 	DB::table('tasks')->insert([
	            'content' => str_random(10),
	            'list_id' => 1,
	            'complete' => false,
	            'created_at' => \Carbon\Carbon::now(),
	            'updated_at' => \Carbon\Carbon::now()
	        ]);   
    	}
    }
}
