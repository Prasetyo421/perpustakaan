<?php

namespace App\Http\Controllers;

use App\Models\Book;
// use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::latest()->paginate(5);
        // $data['books'] = Book::latest()->paginate(5);
        return view('book.index', compact('books'))->with('i', (request()->input('page', 1) - 1) * 5);
        // return view('book.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'publisher' => 'required|max:255',
            'number_of_pages' => 'required',
        ];

        $validateData = $request->validate($rules);

        // dd($validateData);
        Book::create($validateData);

        return redirect()->route('book.index')->with('success', 'Buku berhasil di tabahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookRequest  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $rules = [
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'publisher' => 'required|max:255',
            'number_of_pages' => 'required',
        ];

        $validateData = $request->validate($rules);

        $book->update($validateData);

        return redirect()->route('book.index')->with('success', 'Buku berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('book.index')->with('success', 'Buku berhasil di hapus');
    }
}
