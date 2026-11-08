@extends('layouts.auth')

@section('styles')
    <style>
        .page-bg {
            background-color: var(--color-background);
            background-image: radial-gradient(circle at 50% 10%, rgba(59, 130, 246, 0.08) 0%, transparent 70%);
        }

        .dark .page-bg {
            background-image: radial-gradient(circle at 50% 10%, rgba(59, 130, 246, 0.12) 0%, transparent 70%);
        }

        .max-w-390px {
            max-width: 390px;
            margin: 0 auto;
        }
    </style>
@endsection

@section('content')
    <div class="flex items-center justify-center grow bg-center bg-no-repeat page-bg p-5 min-h-screen">
        <div class="kt-card max-w-390px w-full border border-border shadow-xs">
            <form action="{{ route('login.post') }}" class="kt-card-content flex flex-col gap-5 p-8 sm:p-10" id="sign_in_form"
                method="POST">
                @csrf

                <!-- Header Branding -->
                <div class="text-center mb-1">
                    <a href="{{ route('home') }}"
                        class="inline-flex items-center justify-center size-12 rounded-xl bg-primary text-primary-foreground font-bold text-xl shadow-xs mb-3 hover:opacity-90 transition"
                        title="Zankhana Journal">
                        Z
                    </a>
                    <h3 class="text-lg font-semibold text-mono leading-none mb-2">
                        Sign in
                    </h3>
                    <div class="flex items-center justify-center font-medium">
                        <span class="text-xs text-secondary-foreground">
                            Zankhana International E-Journal
                        </span>
                    </div>
                </div>

                <!-- Flash Authentication Error -->
                @if (session('error'))
                    <div
                        class="flex items-center gap-2.5 p-3 rounded-lg border border-destructive/20 bg-destructive/10 text-destructive text-xs">
                        <i class="ki-filled ki-information-2 text-base shrink-0"></i>
                        <span>{{ session('error') }}</span>
                    </div>
                @endif

                <!-- Email Input -->
                <div class="flex flex-col gap-1">
                    <label class="kt-form-label font-normal text-mono text-xs" for="email">
                        Email
                    </label>
                    <div class="kt-input @error('email') border-destructive @enderror">
                        <i class="ki-filled ki-sms text-muted-foreground text-sm"></i>
                        <input class="grow bg-transparent text-sm text-foreground focus:outline-none min-w-0" id="email"
                            name="email" placeholder="author@university.edu" type="email" value="{{ old('email') }}"
                            required autofocus />
                    </div>
                    @error('email')
                        <span class="text-xs text-destructive mt-0.5">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password Input with Toggle -->
                <div class="flex flex-col gap-1">
                    <div class="flex items-center justify-between gap-1">
                        <label class="kt-form-label font-normal text-mono text-xs" for="password">
                            Password
                        </label>
                    </div>
                    <div class="kt-input @error('password') border-destructive @enderror" data-kt-toggle-password="true">
                        <i class="ki-filled ki-key text-muted-foreground text-sm"></i>
                        <input class="grow bg-transparent text-sm text-foreground focus:outline-none min-w-0" id="password"
                            name="password" placeholder="Enter Password" type="password" required
                            autocomplete="current-password" />
                        <button class="kt-btn kt-btn-sm kt-btn-ghost kt-btn-icon bg-transparent! -me-1.5"
                            data-kt-toggle-password-trigger="true" type="button" aria-label="Toggle password">
                            <span class="kt-toggle-password-active:hidden">
                                <i class="ki-filled ki-eye text-muted-foreground text-sm"></i>
                            </span>
                            <span class="hidden kt-toggle-password-active:block">
                                <i class="ki-filled ki-eye-slash text-muted-foreground text-sm"></i>
                            </span>
                        </button>
                    </div>
                    @error('password')
                        <span class="text-xs text-destructive mt-0.5">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Remember Me -->
                <label class="kt-label flex items-center gap-2 cursor-pointer">
                    <input class="kt-checkbox kt-checkbox-sm" name="remember" type="checkbox" value="1" />
                    <span class="kt-checkbox-label text-xs text-secondary-foreground select-none">
                        Remember me
                    </span>
                </label>

                <!-- Sign In Button -->
                <button type="submit" class="kt-btn kt-btn-primary flex justify-center grow">
                    Sign In
                </button>

                <!-- Return to Homepage Link -->
                <div class="text-center pt-2 border-t border-border mt-1">
                    <a href="{{ route('home') }}"
                        class="text-xs text-secondary-foreground hover:text-primary transition inline-flex items-center gap-1.5 font-medium">
                        <i class="ki-filled ki-left text-xs"></i>
                        Back to Journal Homepage
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Password toggle fallback in case KTUI toggle needs instant client fallback
        const toggleBtn = document.querySelector('[data-kt-toggle-password-trigger="true"]');
        if (toggleBtn) {
            toggleBtn.addEventListener('click', function(e) {
                const wrapper = this.closest('[data-kt-toggle-password="true"]');
                const input = wrapper ? wrapper.querySelector('input') : null;
                if (input) {
                    const isPassword = input.type === 'password';
                    input.type = isPassword ? 'text' : 'password';
                    wrapper.classList.toggle('kt-toggle-password-active', isPassword);
                }
            });
        }
    </script>
@endsection
