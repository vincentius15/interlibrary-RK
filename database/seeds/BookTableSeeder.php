<?php

use Illuminate\Database\Seeder;
use App\Book;
class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      $book = new Book();
      $book->local_id = 'TC-105';
      $book->name = 'Learning Laravel in 5 Minute';
      $book->author = 'Anon';
      $book->jurusan = 'Informatika';
      $book->type = 'Buku Penunjang Kuliah';
      $book->copy_number = 4;
      $book->available_number = 2;
      $book->save();

      $book = new Book();
      $book->local_id = 'Biologi-97';
      $book->name = 'Human Anatomy in 5 Minute';
      $book->author = 'Anon';
      $book->jurusan = 'Biologi';
      $book->type = 'Buku Penunjang Kuliah';
      $book->copy_number = 3;
      $book->available_number = 3;
      $book->save();

      $book = new Book();
      $book->local_id = 'Despro-105';
      $book->name = 'Perspective Drawing in 5 Minute';
      $book->author = 'Anon';
      $book->jurusan = 'Desain Produk';
      $book->type = 'Buku Penunjang Kuliah';
      $book->copy_number = 4;
      $book->available_number = 3;
      $book->save();
    }
}
