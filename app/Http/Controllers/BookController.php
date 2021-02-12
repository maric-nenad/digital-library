<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index() {

        return view('home');

    }

    public function about() {

        return view('about');

    }

    public function books() {

        return view('books')
            ->with('books', Book::orderBy('name', 'ASC')->get());

    }

    public function search(Request $request) {

        $searchText = $request->input('search');

        $results = DB::table('books')
            ->where('name', 'LIKE', '%' . $searchText . '%')
            ->orWhere('author', 'LIKE', '%' . $searchText . '%')
            ->get();

        return view('search')
            ->with('results', $results);
    }

    public function reader($id) {

        $book = Book::all()
            ->where('id', $id);

        return view('reader')
            ->with('book', $book);

    }
}
