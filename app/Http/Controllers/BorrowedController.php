<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Book;
use App\Borrowed;

class BorrowedController extends Controller
{
    
    private $book;

    private $borrow;

    public function __construct(Book $book, Borrowed $borrow)
    {
        $this->book = $book;
        $this->borrow = $borrow;
    }

    public function index(int $bookId)
    {
        return $this->store($bookId);
    }

    public function store(int $bookId)
    {
        if( empty( $bookId ) ) {
            return redirect('/');
        }
        
        $userId = Auth::user()->id;
        $book = $this->book->find($bookId);

        if( empty( $book ) ) {
            return redirect('/');
        }

        if( ! $this->updateBook($book) ) {
            ///error l
        }

        if( ! $this->add( $userId, $book ) ) {
            ///    
        }

        return redirect()->back();
    }

    public function updateBook(Book $book)
    {
        if( $book->quantity < 1 ) {
            ///add this to error 
        }

        $quantity = $book->quantity - 1;
        
        return $book->update([
            'quantity' => $quantity < 0 ? 0 : $quantity
        ]);
    
    }

    public function add( int $userId, Book $book)
    {
        return $this->borrow->create([
            'user_id' => $userId,
            'book_id' => $book->id,
            'book_quantity' => 1
        ]);
    }

}
