<?php

use App\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $b1 = Book::create([
        	'title'	=>	'Lean on Startups',
        	'author' => 'Prof. Jk Willems',
        	'link'	=> 'http://amazon.eu/books/jkw/',
        	'details'	=> 'Competently coordinate standardized convergence before B2C process improvements. Progressively coordinate distinctive architectures vis-a-vis strategic niches. Authoritatively exploit extensive core competencies and business human capital. Continually.',
        	'category_id'	=> 1
        ]);
        $b2 = Book::create([
        	'author'	=>	'Dr. Sulieman Bengal',
        	'title' => 'Modern Islam',
        	'link'	=> 'http://amazon.ksa/books/prof_s_bengal/',
        	'details'	=> 'Competently coordinate standardized convergence before B2C process improvements. Progressively coordinate distinctive architectures vis-a-vis strategic niches. Authoritatively exploit extensive core competencies and business human capital. Continually.',
        	'category_id'	=> 4
        ]);
        $b3 = Book::create([
        	'author'	=>	'Prof. Ali Sheikh',
        	'title' => 'Feminism in Islam',
        	'link'	=> 'http://amazon.ksa/books/Ali_s/',
        	'details'	=> 'Competently coordinate standardized convergence before B2C process improvements. Progressively coordinate distinctive architectures vis-a-vis strategic niches. Authoritatively exploit extensive core competencies and business human capital. Continually.',
        	'category_id'	=> 5
        ]);
        $b4 = Book::create([
        	'author'	=>	'Dietel & Dietel',
        	'title' => 'How to C#',
        	'link'	=> 'http://amazon.com/books/d&d/',
        	'details'	=> 'Competently coordinate standardized convergence before B2C process improvements. Progressively coordinate distinctive architectures vis-a-vis strategic niches. Authoritatively exploit extensive core competencies and business human capital. Continually.',
        	'category_id'	=> 6
        ]);
        $b5 = Book::create([
        	'author'	=>	'Prof. Howard Antonio',
        	'title' => 'How to overcome Depression',
        	'link'	=> 'http://amazon.uk/books/p_howard_antionio/',
        	'details'	=> 'Competently coordinate standardized convergence before B2C process improvements. Progressively coordinate distinctive architectures vis-a-vis strategic niches. Authoritatively exploit extensive core competencies and business human capital. Continually.',
        	'category_id'	=> 2
        ]);
        $b6 = Book::create([
        	'author'	=>	'Prof. Howard Antonio',
        	'title' => 'How to overcome Anxiety',
        	'link'	=> 'http://amazon.uk/books/p_howard_antionio/',
        	'details'	=> 'Competently coordinate standardized convergence before B2C process improvements. Progressively coordinate distinctive architectures vis-a-vis strategic niches. Authoritatively exploit extensive core competencies and business human capital. Continually.',
        	'category_id'	=> 3
        ]);
        $b6 = Book::create([
        	'author'	=>	'Dr. Jack Daniel',
        	'title' => 'New Start',
        	'link'	=> 'http://amazon.us/books/dr_jack_D/',
        	'details'	=> 'Competently coordinate standardized convergence before B2C process improvements. Progressively coordinate distinctive architectures vis-a-vis strategic niches. Authoritatively exploit extensive core competencies and business human capital. Continually.',
        	'category_id'	=> 7
        ]);
        $b7 = Book::create([
        	'author'	=>	'Prof. Marko D.',
        	'title' => 'Easy English',
        	'link'	=> 'http://amazon.uk/books/mard_d/',
        	'details'	=> 'Competently coordinate standardized convergence before B2C process improvements. Progressively coordinate distinctive architectures vis-a-vis strategic niches. Authoritatively exploit extensive core competencies and business human capital. Continually.',
        	'category_id'	=> 8
        ]);
    }
}
