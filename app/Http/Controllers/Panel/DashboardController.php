<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('panel.dashboard', [
            'pageTitle' => 'Dashboard',

            'cards' => [
                [
                    'title' => 'Total Books',
                    'value' => Book::count(),
                    'icon' => 'book',
                    'color' => 'primary',
                    'badge' => '+100%',
                    'sub' => 'Overall',
                ],
                [
                    'title' => 'Active Books',
                    'value' => Book::where('is_active', 1)->count(),
                    'icon' => 'book',
                    'color' => 'success',
                    'badge' => 'Live',
                    'sub' => 'Available',
                ],
                [
                    'title' => 'Inactive Books',
                    'value' => Book::where('is_active', 0)->count(),
                    'icon' => 'book',
                    'color' => 'danger',
                    'badge' => 'Stopped',
                    'sub' => 'Not Active',
                ],
                [
                    'title' => 'Total Downloads',
                    'value' => Book::sum('sell_count'),
                    'icon' => 'book',
                    'color' => 'info',
                    'badge' => 'Activity',
                    'sub' => 'All Time',
                ],
            ],
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
        //
    }
}
