<!-- Mobile Header -->
<header
    class="flex lg:hidden items-center fixed z-10 top-0 start-0 end-0 shrink-0 bg-muted h-(--header-height) border-b border-border"
    id="header">
    <div class="kt-container-fixed flex items-center justify-between flex-wrap gap-3 w-full px-4">
        <a href="{{ route('panel.dashboard') }}" class="flex items-center gap-2">
            <div
                class="size-8 rounded-lg bg-primary/10 text-primary flex items-center justify-center font-bold text-base">
                Z
            </div>
            <div class="flex flex-col">
                <span class="font-bold text-sm tracking-tight text-foreground leading-tight">Zankhana</span>
                <span class="text-[10px] text-muted-foreground uppercase tracking-wider font-medium">Admin Panel</span>
            </div>
        </a>
        <div class="flex items-center gap-2">
            <button class="kt-btn kt-btn-icon kt-btn-ghost -me-2" data-kt-drawer-toggle="#sidebar">
                <i class="ki-filled ki-menu text-xl"></i>
            </button>
        </div>
    </div>
</header>
