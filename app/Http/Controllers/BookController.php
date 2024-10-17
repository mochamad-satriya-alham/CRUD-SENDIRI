<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\BookController;


class BookController extends Controller
{
    public function index()
    {
        //menampilkan daftar buku
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'year' => 'required',
        ]);

        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'year' => $request->year,
        ]);

        // Book::create($request->all());
        return redirect()->back()->with('success','berhasil di tambah');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $books = Book::find($id);
        return view('books.edit', compact('books'));
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
        Book::where('id', $id)->delete();   

        return redirect()->back()->with('deleted', 'Berhasil menghapus Buku!');
    }
}
