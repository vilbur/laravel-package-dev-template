<?php

use Illuminate\Database\Seeder;
use Vilbur\DevTemplate\Models\DevTemplate;

class DevTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		if(!DevTemplate::all()->first())
			factory(DevTemplate::class, 1)->create();
    }
}
