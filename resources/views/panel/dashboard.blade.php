@extends('layouts.panel')

@section('content')
    <!-- Page Header -->
    <x-ui.page-header title="Dashboard"
        description="Welcome to Zankhana International E-Journal publication & editorial management." :breadcrumbs="['Panel' => route('panel.dashboard'), 'Dashboard' => '']">
        <x-slot:actions>
            <x-ui.button variant="outline" size="sm" icon="compass" href="{{ route('home') }}" target="_blank">
                View Site
            </x-ui.button>
            <x-ui.button variant="primary" size="sm" icon="plus" href="{{ route('panel.books.create') }}">
                Add Book / Article
            </x-ui.button>
        </x-slot:actions>
    </x-ui.page-header>

    <!-- KPI Metric Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
        @foreach ($cards as $card)
            <x-ui.stat-card :title="$card['title']" :value="$card['value']" :icon="$card['icon']" :color="$card['color']" :badge="$card['badge'] ?? null"
                :sub="$card['sub'] ?? null" />
        @endforeach
    </div>

    <!-- Quick Overview & Actions Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Journal Info Card -->
        <div class="lg:col-span-2">
            <x-ui.card title="Journal Overview" description="Official credentials and operational details">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                    <div class="p-3.5 rounded-lg border border-border bg-muted/30">
                        <span class="text-xs text-muted-foreground uppercase tracking-wider font-semibold">ISSN
                            (Online)</span>
                        <div class="text-lg font-bold text-foreground mt-1">2350-0271</div>
                        <span class="text-xs text-muted-foreground">Registered E-Journal</span>
                    </div>
                    <div class="p-3.5 rounded-lg border border-border bg-muted/30">
                        <span class="text-xs text-muted-foreground uppercase tracking-wider font-semibold">Frequency</span>
                        <div class="text-lg font-bold text-foreground mt-1">Monthly</div>
                        <span class="text-xs text-muted-foreground">12 Issues / Year</span>
                    </div>
                    <div class="p-3.5 rounded-lg border border-border bg-muted/30">
                        <span class="text-xs text-muted-foreground uppercase tracking-wider font-semibold">Review
                            Model</span>
                        <div class="text-lg font-bold text-foreground mt-1">Peer Reviewed</div>
                        <span class="text-xs text-muted-foreground">Double-blind evaluation</span>
                    </div>
                </div>

                <div class="text-sm text-secondary-foreground leading-relaxed">
                    Zankhana is an academic journal dedicated to the dissemination of scholarly research, academic
                    knowledge, and intellectual contributions across multiple disciplines published by <strong>Madhav
                        Publication</strong>.
                </div>
            </x-ui.card>
        </div>

        <!-- Quick Actions Card -->
        <div>
            <x-ui.card title="Quick Actions" description="Fast access to common tasks">
                <div class="flex flex-col gap-2.5">
                    <a href="{{ route('panel.books.create') }}"
                        class="flex items-center gap-3 p-3 rounded-lg border border-border hover:bg-muted/50 hover:border-primary/40 transition group">
                        <div
                            class="size-9 rounded-lg bg-primary/10 text-primary flex items-center justify-center group-hover:scale-105 transition">
                            <i class="ki-filled ki-plus text-lg"></i>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-sm font-semibold text-foreground">Add New Book</span>
                            <span class="text-xs text-muted-foreground">Upload and publish manuscript</span>
                        </div>
                        <i
                            class="ki-filled ki-right text-xs ms-auto text-muted-foreground group-hover:text-primary transition"></i>
                    </a>

                    <a href="{{ route('panel.books') }}"
                        class="flex items-center gap-3 p-3 rounded-lg border border-border hover:bg-muted/50 hover:border-primary/40 transition group">
                        <div
                            class="size-9 rounded-lg bg-green-500/10 text-green-600 flex items-center justify-center group-hover:scale-105 transition">
                            <i class="ki-filled ki-book-open text-lg"></i>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-sm font-semibold text-foreground">Manage Books</span>
                            <span class="text-xs text-muted-foreground">Review, toggle status, or edit</span>
                        </div>
                        <i
                            class="ki-filled ki-right text-xs ms-auto text-muted-foreground group-hover:text-primary transition"></i>
                    </a>

                    <a href="{{ route('home') }}" target="_blank"
                        class="flex items-center gap-3 p-3 rounded-lg border border-border hover:bg-muted/50 hover:border-primary/40 transition group">
                        <div
                            class="size-9 rounded-lg bg-sky-500/10 text-sky-600 flex items-center justify-center group-hover:scale-105 transition">
                            <i class="ki-filled ki-compass text-lg"></i>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-sm font-semibold text-foreground">Public Website</span>
                            <span class="text-xs text-muted-foreground">Preview public reader portal</span>
                        </div>
                        <i
                            class="ki-filled ki-exit-up-right text-xs ms-auto text-muted-foreground group-hover:text-primary transition"></i>
                    </a>
                </div>
            </x-ui.card>
        </div>
    </div>
@endsection
