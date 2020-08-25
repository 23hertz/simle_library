<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;

class AdminController extends Controller
{
    
    public function index(){

        $books  = Book::all();

        return  view('adminhome',['books' => $books]);

        //return view('adminhome');
    }

    public function delete($id)
    {
        $task = Book::findorFail($id)->delete();
       
        return redirect()->back()->with('status', 'Post has been successfully delete!');

    }

    public function create(){
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

        return view('adminhome')->with('status', 'Post has been successfully createds!');
       // return redirect()->back()->with('status', 'Post has been successfully createds!');


    }

}

