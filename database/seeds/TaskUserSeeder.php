<?php

use Illuminate\Database\Seeder;

class TaskUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5; $i++) {
    	 	DB::table('task-user')->insert([
	            'user_id' => 1,
	            'task_id' => $i,
	            'created_at' => \Carbon\Carbon::now(),
	            'updated_at' => \Carbon\Carbon::now()
	        ]);   
    	}
    }
}
