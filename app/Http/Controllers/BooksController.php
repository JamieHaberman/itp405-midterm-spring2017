<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Book;
use App\Author;
use App\Publisher;

class BooksController extends Controller
{
    //
    public function index($id)
    {
 $books = DB::select('select reviews.headline, reviews.body, reviews.rating, books.title, authors.first_name, authors.last_name, publishers.name as publisher_name
 from reviews, authors, books, publishers where books.id = ? AND authors.id = books.author_id
AND reviews.book_id = books.id
AND books.publisher_id = publishers.id', [$id]);

        return view('books', [
          'books'=> $books,
        ]);

    }

    public function booksTable()
    {


      $books = Book::with('author','publisher')->get();

      return view('bookTable',[
            'books'=>$books,
          ]);

    


    }

}
