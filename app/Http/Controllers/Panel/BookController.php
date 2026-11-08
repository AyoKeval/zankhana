<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::paginate(10); // or with filters

        return view('panel.books.index', [
            'pageTitle' => 'Book List',
            'books' => $books,
            'publishedCount' => Book::where('is_active', true)->count(),
            'draftCount' => Book::where('is_active', false)->count(),
        ]);
    }
    public function status($id, $status)
    {
        $book = Book::findOrFail($id);
        $book->is_active = $status ? 1 : 0;
        $book->save();

        return response()->json([
            'success' => true,
            'message' => 'Book status updated.',
            'is_active' => $book->is_active,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('panel.books.create', [
            'pageTitle' => 'Book Create'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id = $request->input('id', 0);

        // Validation rules
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'category' => 'required|in:article,volume',
            'pdf_file' => ($id == 0 ? 'required|' : 'nullable|') . 'file|mimes:pdf|max:20480',
        ]);

        // Format text fields
        $data = [
            'title' => ucwords(strtolower($request->input('title'))),
            'author' => ucwords(strtolower($request->input('author'))),
            'category' => strtolower($request->input('category')),
        ];

        // Handle PDF upload
        if ($request->hasFile('pdf_file') && $request->file('pdf_file')->isValid()) {
            $uploadPath = public_path('uploads/pdfs');

            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }

            $file = $request->file('pdf_file');
            $encryptedName = md5(uniqid()) . '.' . $file->getClientOriginalExtension();

            $file->move($uploadPath, $encryptedName);

            $data['pdf_file'] = $encryptedName;
        }

        // IP Address
        $data['ip_address'] = $request->ip();

        // Insert or Update
        if ($id == 0) {
            $query = Book::create($data);
        } else {
            $query = Book::where('id', $id)->update($data);
        }

        if ($query) {
            $message = ($id == 0) ? 'Book added successfully.' : 'Book updated successfully.';

            return response()->json([
                'success' => true,
                'message' => $message,
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Failed to save book.',
        ], 500);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $book = Book::select(
            'id',
            'is_active',
            'title',
            'author',
            'category',
            'pdf_file',
            'sell_count',
            'created_at',
            'updated_at',
            'ip_address'
        )->findOrFail($id);

        return view('panel.books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);

        return view('panel.books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::findOrFail($id);
        $book->is_del = 1;
        $book->save();

        return redirect('/panel/books');
    }
}
