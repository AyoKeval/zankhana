<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('title', 'asc')->get();

        return view('web.books', [
            'books' => $books,
            'pageTitle' => 'Books'
        ]);
    }

    public function show($title)
    {
        $title = urldecode($title);

        $book = Book::where('title', $title)->first();

        if (!$book) {
            abort(404);
        }

        return view('web.details', [
            'book' => $book,
            'pageTitle' => 'Book Details'
        ]);
    }

    public function count($id)
    {
        if (!$id) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid book ID'
            ]);
        }

        $book = Book::find($id);

        if (!$book) {
            return response()->json([
                'success' => false,
                'message' => 'Book not found'
            ]);
        }

        $book->increment('sell_count');

        return response()->json([
            'success' => true,
            'message' => 'Sell count updated'
        ]);
    }
}