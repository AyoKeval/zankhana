<!-- Footer -->
<footer class="footer border-t border-border mt-auto">
    <div class="kt-container-fixed w-full">
        <div class="flex flex-col md:flex-row justify-between items-center gap-3 py-4 text-xs text-muted-foreground">
            <div class="flex items-center gap-2">
                <span>{{ date('Y') }}©</span>
                <span class="font-medium text-foreground">Zankhana International E-Journal</span>
                <span class="text-muted-foreground/50">|</span>
                <span>Madhav Publication</span>
            </div>
            <div class="flex items-center gap-4">
                <a class="hover:text-primary transition" href="{{ route('home') }}" target="_blank">Home</a>
                <a class="hover:text-primary transition" href="{{ route('aboutUs') }}" target="_blank">About</a>
                <a class="hover:text-primary transition" href="{{ route('contact') }}" target="_blank">Support</a>
                <span class="kt-badge kt-badge-sm kt-badge-mono kt-badge-outline">v1.11.01</span>
            </div>
        </div>
    </div>
</footer>
<!-- End of Footer -->
