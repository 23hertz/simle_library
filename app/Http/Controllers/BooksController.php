<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;


class BooksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $books  = Book::all();

        return  view('books.index',compact('books'));


    }

    public function show(Book $book ){
        return view('books.show', ['book' => $book]);
    }

    /*public function create(){
        return  view('books.create');
    }

    public function store(){

        $this->validate(request() , [
            'title' => 'required',
            'author' => 'required',
            'quantity' => 'required',
            'about' => 'required',
        ]);

        $book = new Book;

        $book->title = request('title');
        $book->author = request('author');
        $book->quantity = request('quantity');
        $book->about = request('about');

        $book->save();

        return redirect('/books');

    }*/

}
