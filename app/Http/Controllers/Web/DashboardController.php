<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\EditorialBoard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('sell_count', 'desc')->get();

        return view('web.home', [
            'books' => $books,
            'pageTitle' => 'Home',
        ]);
    }

    public function board()
    {
        $members = EditorialBoard::where('is_active', 1)
            ->where('is_del', 0)
            ->orderBy('id', 'asc')
            ->get();

        $groupedMembers = $members->groupBy('board_type');

        return view('web.board', [
            'pageTitle' => 'Editorial Board',
            'members' => $members,
            'groupedMembers' => $groupedMembers,
        ]);
    }

    public function others()
    {
        return view('web.others', [
            'pageTitle' => 'Others',
        ]);
    }

    public function contact()
    {
        return view('web.contact', [
            'pageTitle' => 'Contact',
        ]);
    }

    public function contactSubmit(Request $request)
    {
        $ip_address = $request->ip();

        DB::table('tbl_contact_messages')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'genre' => $request->genre,
            'interests' => json_encode($request->interests),
            'message' => $request->message,
            'ip_address' => $ip_address,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json(['success' => true]);
    }

    public function publication()
    {
        return view('web.publication', [
            'pageTitle' => 'Publication',
        ]);
    }


    public function privacy(string $page)
    {
        $pages = [
            'publication-ethics' => [
                'view' => 'web.privacy.publication-ethics',
                'title' => 'Publication Ethics',
            ],
            'plagiarism-policy' => [
                'view' => 'web.privacy.plagiarism-policy',
                'title' => 'Plagiarism Policy',
            ],
            'copyright-policy' => [
                'view' => 'web.privacy.copyright-policy',
                'title' => 'Copyright Policy',
            ],
        ];

        abort_unless(isset($pages[$page]), 404);

        return view($pages[$page]['view'], [
            'pageTitle' => $pages[$page]['title'],
        ]);
    }

    public function guidelines(string $page)
    {
        $pages = [
            'author-guidelines' => [
                'view' => 'web.guidelines.author-guidelines',
                'title' => 'Author Guidelines',
            ],
            'manuscript-template-part-a' => [
                'view' => 'web.guidelines.manuscript-template-part-a',
                'title' => 'Manuscript Template Part A',
            ],
            'manuscript-template-part-b' => [
                'view' => 'web.guidelines.manuscript-template-part-b',
                'title' => 'Manuscript Template Part B',
            ],
        ];

        abort_unless(isset($pages[$page]), 404);

        return view($pages[$page]['view'], [
            'pageTitle' => $pages[$page]['title'],
        ]);
    }

    public function aboutUs()
    {
        return view('web.aboutUs', [
            'pageTitle' => 'About Us',
        ]);
    }
}
