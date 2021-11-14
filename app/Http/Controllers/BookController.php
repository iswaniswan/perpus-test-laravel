<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Author;
use App\Models\Publisher;
use Illuminate\Support\Str;

class BookController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Book $books)
    {
        return view('book.index', [
            'title' => 'book',
            'books' => $books->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $author = Author::all();
        $publisher = Publisher::all();

        return view('book.create', [
            'title' => 'book',
            'categories' => $category,
            'authors' => $author,
            'publishers' => $publisher
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'synopsis' => 'required',
            'author_id' => 'required',
            'category_id' => 'required',
            'publisher_id' => 'required',
            'year' => 'required'
        ]);
        
        // check if book with the same title and author already exists
        $exists = Book::where('title', $request['title'])
            ->where('author_id', $request['author_id'])
            ->get();          

        if($exists->count() >= 1) 
        {
            return redirect()->route('book.create')
                                ->withInput()
                                ->with('error', 'The book with the same author, already exist');
        }

        Book::create($request->all());

        return redirect()->route('book.index')
                            ->with('success','Data buku berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {       
        $book = Book::find($id);

        $author_selected = $book->author_id;

        return view('book.edit', [
            'title' => 'book',
            'book' => Book::find($id),
            'authors' => Author::all(),
            'categories' => Category::all(),
            'publishers' => Publisher::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);
    
        $book = Book::find($id);
        $book->update($request->all());
    
        return redirect()->route('book.index')
                        ->with('success','Data buku berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();

        return redirect()->route('book.index')
                        ->with('success','Data buku berhasil dihapus');
    }
}
