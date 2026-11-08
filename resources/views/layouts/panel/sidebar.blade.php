<!-- Sidebar -->
<div class="fixed top-0 bottom-0 z-20 hidden lg:flex flex-col shrink-0 w-(--sidebar-width) bg-muted [--kt-drawer-enable:true] lg:[--kt-drawer-enable:false]"
    data-kt-drawer="true" data-kt-drawer-class="kt-drawer kt-drawer-start flex top-0 bottom-0" id="sidebar">
    <!-- Sidebar Header -->
    <div id="sidebar_header" class="">
        <div class="flex items-center gap-3 px-4 h-[70px]">
            <a href="{{ route('panel.dashboard') }}" class="flex items-center gap-2.5">
                <div
                    class="size-10 rounded-xl bg-primary text-primary-foreground flex items-center justify-center font-bold text-lg shadow-sm">
                    Z
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-base text-foreground tracking-tight leading-tight">Zankhana</span>
                    <span
                        class="text-[10px] text-muted-foreground uppercase tracking-widest font-semibold">International
                        E-Journal</span>
                </div>
            </a>
        </div>
    </div>
    <!-- End of Sidebar Header -->

    <!-- Sidebar Menu -->
    <div class="flex items-stretch grow shrink-0 justify-center my-4" id="sidebar_menu">
        <div class="kt-scrollable-y-auto grow" data-kt-scrollable="true"
            data-kt-scrollable-dependencies="#sidebar_header, #sidebar_footer" data-kt-scrollable-height="auto"
            data-kt-scrollable-offset="0px" data-kt-scrollable-wrappers="#sidebar_menu">
            <div class="kt-menu flex flex-col w-full gap-1 px-3.5" data-kt-menu="true" id="sidebar_primary_menu">

                <!-- Section: Main -->
                <div class="pt-2 pb-1.5 px-2.5 text-[11px] font-bold text-muted-foreground/80 uppercase tracking-wider">
                    General
                </div>

                <!-- Dashboard Menu Item -->
                <div class="kt-menu-item {{ request()->routeIs('panel.dashboard') ? 'active' : '' }}">
                    <a class="kt-menu-link gap-2.5 py-2 px-2.5 rounded-lg border border-transparent {{ request()->routeIs('panel.dashboard') ? 'border-border bg-background shadow-xs text-primary font-semibold' : 'hover:bg-background/70 hover:border-border text-foreground' }}"
                        href="{{ route('panel.dashboard') }}">
                        <span
                            class="kt-menu-icon items-start text-lg {{ request()->routeIs('panel.dashboard') ? 'text-primary' : 'text-secondary-foreground' }}">
                            <i class="ki-filled ki-element-11"></i>
                        </span>
                        <span class="kt-menu-title text-sm font-medium">
                            Dashboard
                        </span>
                    </a>
                </div>

                <!-- Section: Publication Management -->
                <div class="pt-4 pb-1.5 px-2.5 text-[11px] font-bold text-muted-foreground/80 uppercase tracking-wider">
                    Publications
                </div>

                <!-- Books / Articles Menu Item with Accordion -->
                <div class="kt-menu-item {{ request()->routeIs('panel.books*') ? 'show' : '' }}"
                    data-kt-menu-item-toggle="accordion" data-kt-menu-item-trigger="click">
                    <div
                        class="kt-menu-link gap-2.5 py-2 px-2.5 rounded-lg border border-transparent cursor-pointer hover:bg-background/70 hover:border-border {{ request()->routeIs('panel.books*') ? 'bg-background/50 border-border/50' : '' }}">
                        <span
                            class="kt-menu-icon items-start text-lg {{ request()->routeIs('panel.books*') ? 'text-primary' : 'text-secondary-foreground' }}">
                            <i class="ki-filled ki-book-open"></i>
                        </span>
                        <span class="kt-menu-title font-medium text-sm text-foreground">
                            Books & Articles
                        </span>
                        <span class="kt-menu-arrow text-muted-foreground ms-auto">
                            <span class="inline-flex kt-menu-item-show:hidden">
                                <i class="ki-filled ki-down text-xs"></i>
                            </span>
                            <span class="hidden kt-menu-item-show:inline-flex">
                                <i class="ki-filled ki-up text-xs"></i>
                            </span>
                        </span>
                    </div>
                    <div class="kt-menu-accordion gap-1 ps-6 pt-1">
                        <div class="kt-menu-item">
                            <a class="kt-menu-link py-2 px-2.5 rounded-md border border-transparent {{ request()->routeIs('panel.books') ? 'border-border bg-background shadow-xs font-semibold text-primary' : 'hover:bg-background/70 hover:border-border text-muted-foreground hover:text-foreground' }}"
                                href="{{ route('panel.books') }}">
                                <i
                                    class="ki-filled ki-bullet text-xs me-2 {{ request()->routeIs('panel.books') ? 'text-primary' : 'text-muted-foreground' }}"></i>
                                <span class="kt-menu-title text-sm">
                                    All Books / List
                                </span>
                            </a>
                        </div>
                        <div class="kt-menu-item">
                            <a class="kt-menu-link py-2 px-2.5 rounded-md border border-transparent {{ request()->routeIs('panel.books.create') ? 'border-border bg-background shadow-xs font-semibold text-primary' : 'hover:bg-background/70 hover:border-border text-muted-foreground hover:text-foreground' }}"
                                href="{{ route('panel.books.create') }}">
                                <i
                                    class="ki-filled ki-bullet text-xs me-2 {{ request()->routeIs('panel.books.create') ? 'text-primary' : 'text-muted-foreground' }}"></i>
                                <span class="kt-menu-title text-sm">
                                    Add New Book
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Section: Website Links -->
                <div class="pt-4 pb-1.5 px-2.5 text-[11px] font-bold text-muted-foreground/80 uppercase tracking-wider">
                    Quick Links
                </div>

                <div class="kt-menu-item">
                    <a class="kt-menu-link gap-2.5 py-2 px-2.5 rounded-lg border border-transparent hover:bg-background/70 hover:border-border text-foreground"
                        href="{{ route('home') }}" target="_blank">
                        <span class="kt-menu-icon items-start text-lg text-secondary-foreground">
                            <i class="ki-filled ki-compass"></i>
                        </span>
                        <span class="kt-menu-title text-sm font-medium">
                            Live Website
                        </span>
                        <i class="ki-filled ki-exit-up-right text-xs ms-auto text-muted-foreground"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!-- End of Sidebar Menu -->

    <!-- Sidebar Footer -->
    <div class="shrink-0 p-3.5 flex flex-col gap-3" id="sidebar_footer">
        <div class="flex items-center justify-between p-2 rounded-xl bg-background border border-border shadow-xs">
            <div class="flex items-center gap-2.5 min-w-0">
                <div
                    class="size-9 rounded-full bg-primary/10 text-primary flex items-center justify-center font-bold text-sm shrink-0 border border-primary/20">
                    AD
                </div>
                <div class="flex flex-col min-w-0">
                    <span class="text-xs font-semibold text-foreground truncate">Admin</span>
                    <span class="text-[10px] text-muted-foreground truncate">Zankhana Journal</span>
                </div>
            </div>

            <a class="kt-btn kt-btn-ghost kt-btn-icon size-8 hover:bg-muted text-muted-foreground hover:text-destructive shrink-0"
                href="{{ route('panel.logout') }}" title="Sign Out">
                <i class="ki-filled ki-exit-right text-lg"></i>
            </a>
        </div>
    </div>
    <!-- End of Sidebar Footer -->
</div>
<!-- End of Sidebar -->
