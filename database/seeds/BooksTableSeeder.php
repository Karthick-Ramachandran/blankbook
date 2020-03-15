<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Book::class, 6)->create();
    }
}
