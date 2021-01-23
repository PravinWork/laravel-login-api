<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
        	'name' => 'Sample Service1',
        	'icon' => 'fa fa-icon',
        	'description' => 'Test description testing the services'
        ]);

        DB::table('services')->insert([
        	'name' => 'Sample Service2',
        	'icon' => 'fa fa-file',
        	'description' => 'Test description testing the services'
        ]);

        DB::table('services')->insert([
        	'name' => 'Sample Service3',
        	'icon' => 'fa fa-file',
        	'description' => 'Test description testing the services'
        ]);

        DB::table('services')->insert([
        	'name' => 'Sample Service4',
        	'icon' => 'fa fa-file',
        	'description' => 'Test description testing the services'
        ]);

        DB::table('services')->insert([
        	'name' => 'Sample Service5',
        	'icon' => 'fa fa-file',
        	'description' => 'Test description testing the services'
        ]);
    }
}
