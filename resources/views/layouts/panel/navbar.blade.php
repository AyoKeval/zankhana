<nav class="navbar navbar-top fixed right-0 top-0 left-0 z-1030 navbar-expand" id="navbarDefault">
    <div class="collapse navbar-collapse justify-between">
        <div class="navbar-logo">
            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse"
                aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                        class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 sm:me-4" href="{{ route('panel.dashboard') }}">
                <div class="flex items-center">
                    <div class="flex items-center"><img src="{{ asset('assets/img/icons/logo.png') }}" alt="phoenix"
                            width="27" />
                        <h5 class="logo-text ms-2 hidden sm:block">Zankhana</h5>
                    </div>
                </div>
            </a>
        </div>
        <ul class="navbar-nav navbar-nav-icons flex-row">
            <li class="nav-item">
                <div class="theme-control-toggle feather-icon-wait px-2"><input
                        class="form-check-input ms-0 theme-control-toggle-input" type="checkbox"
                        data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label
                        class="mb-0 theme-control-toggle-label theme-control-toggle-light size-8"
                        for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                        data-bs-title="Switch theme"><span class="icon" data-feather="moon"></span></label><label
                        class="mb-0 theme-control-toggle-label theme-control-toggle-dark size-8"
                        for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                        data-bs-title="Switch theme"><span class="icon" data-feather="sun"></span></label></div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link leading-none pe-0!" id="navbarDropdownUser"
                    href="{{ route('panel.dashboard') }}" role="button" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar  ">
                        <img class="rounded-full " src="{{ asset('assets/img/team/40x40/57.webp') }}" alt="" />
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border"
                    aria-labelledby="navbarDropdownUser">
                    <div class="card relative border-0">
                        <div class="card-body p-0">
                            <div class="text-center pt-6 pb-4">
                                <div class="avatar avatar-lg ">
                                    <img class="rounded-full " src="{{ asset('assets/img/team/72x72/57.webp') }}"
                                        alt="" />
                                </div>
                                <h6 class="mt-2 text-body-emphasis">Jerry Seinfield</h6>
                            </div>
                        </div>
                        <div class="card-footer pt-4 p-0 border-t border-translucent">
                            <div class="px-4"> <a class="btn btn-phoenix-secondary flex flex-center w-full"
                                    href="{{ route('panel.logout') }}">
                                    <span class="me-2" data-feather="log-out"> </span>Sign out</a></div>
                            <div class="my-2 text-center font-bold text-sm text-body-quaternary"><a
                                    class="text-body-quaternary me-1" href="{{ route('panel.dashboard') }}">Privacy
                                    policy</a>&bull;<a class="text-body-quaternary mx-1"
                                    href="{{ route('panel.dashboard') }}">Terms</a>&bull;<a
                                    class="text-body-quaternary ms-1" href="{{ route('panel.dashboard') }}">Cookies</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
