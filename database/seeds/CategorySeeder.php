<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $t1 = 'Starups';
        $t2 = 'Depression';
        $t3 = 'Anxiety';
        $t4 = 'Islamic';
        $t5 = 'Femisism';
        $t6 = 'Computer Sci';
        $t7 = 'Career';
        $t8 = 'Literature';
        Category::create([
        	'title'	=>	$t1
        ]);
        Category::create([
        	'title'	=>	$t2
        ]);
        Category::create([
        	'title'	=>	$t3
        ]);
        Category::create([
        	'title'	=>	$t4
        ]);
        Category::create([
        	'title'	=>	$t5
        ]);
        Category::create([
        	'title'	=>	$t6
        ]);
        Category::create([
        	'title'	=>	$t7
        ]);
        Category::create([
        	'title'	=>	$t8
        ]);
    }
}
