<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Book;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat sample penulis
        $author1 = Author::create(['name'=>'Rahmat Awaludin']);
        $author2 = Author::create(['name'=>'Nadhifa A']);
        $author3 = Author::create(['name'=>'Takdir S']);

        //membuat sample book
        $book1 = Book::create(['title' => 'Seminggu Belajar',
        'amount' => 353, 'author_id' => $author1->id,
        ]);

        $book2 = Book::create(['title'=>'Sobat Sedu',
        'amount' => 157, 'author_id' => $author2->id,
        ]);

        $book3 = Book::create(['title'=>'Sobat Sakit',
        'amount' => 353, 'author_id' => $author3->id,
        ]);

        $book4 = Book::create(['title'=>'Seminggu Belajar',
        'amount' => 353, 'author_id' => $author1->id,
        ]);
    }
}
