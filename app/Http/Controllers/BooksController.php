<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class BooksController extends Controller
{
    public function search(Request $request)
    {
        $bookName = request(['search']);
//        dd($bookName['search']);
        if (strcmp($bookName['search'], 'cracking') == 0)
        {
            return redirect('/books/find')->with('bookName', $bookName['search']);
        }
        else
        {
            return redirect('/books/find')
                    ->with('bookName', $bookName['search'])
                    ->with('status', $bookName['search']);
        }
    }

    public function find()
    {
        return view('books.find');
    }
}
