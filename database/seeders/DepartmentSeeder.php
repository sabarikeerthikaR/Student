<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('departments')->delete();
           $department= [
            ['name' => 'computer'],
              ['name' => 'accounts'],
        ];
            foreach($department as $dep){
           \App\Models\Department::create($dep);
             }
       
    }
}
