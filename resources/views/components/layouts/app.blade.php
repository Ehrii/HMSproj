<html data-theme="light">

<head>
    {{-- Add this --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @livewireStyles
</head>

<body class="font-sans antialiased">

    {{-- The navbar with `sticky` and `full-width` --}}
    <x-mary-nav sticky full-width class="bg-gradient-to-r from-[#ef4444] to-[#ed1c24] shadow-lg">

        <x-slot:brand>
            {{-- Drawer toggle for "main-drawer" --}}
            <label for="main-drawer" class="lg:hidden mr-3">
                <x-mary-icon name="o-bars-3" class="cursor-pointer" />
            </label>

            {{-- Brand --}}
            <div class="avatar">
                <div class="w-12 p rounded-full shadow-lg mr-3">
                    <label class="swap swap-rotate">
                        <input type="checkbox" />
                        <div class="swap-on">
                            <img src="images/taguig-logo.svg" alt="On State" />
                        </div>
                        <div class="swap-off">
                            <img src="images/taguig-logo.svg" alt="Off State" />
                        </div>
                    </label>
                </div>
            </div>
            <div class="text-white font-bold text-2xl">City Hall Office</div>
        </x-slot:brand>

        {{-- Right side actions --}}

        <div>

            <x-slot:actions>
                {{-- <x-mary-button label="View Service" class="btn bg-blue-custom  text-white border-0" /> --}}
                {{-- <x-mary-button icon="o-user" label="View User"
                    class="btn bg-blue-custom  text-white border-0 btn-small" /> --}}

                <x-mary-dropdown class="text-sm h-8 w-12">
                    {{-- <x-mary-menu-item title="Archive" icon="o-archive-box" /> --}}
                    <x-mary-menu-item title="Profile" icon="o-user" />
                    <x-mary-menu-item title="Log-Out" icon="o-arrow-left-end-on-rectangle" />
                </x-mary-dropdown>
                {{-- <x-mary-button label="Messages" icon="o-envelope" link="###"
                    class="btn bg-blue-custom text-white btn-sm" responsive />
                <x-mary-button label="Notifications" icon="o-bell" link="###"
                    class="btn bg-blue-custom text-white btn-sm" responsive /> --}}
            </x-slot:actions>
    </x-mary-nav>

    {{-- The main content with `full-width` --}}
    <x-mary-main full-width class="bg-base-400 bg-error z-50">
        @php
            $currentRoute = Route::currentRoutename();
        @endphp
        <div x-data="{ collapsed: false }">
            @if ($currentRoute === 'dashboard')

            @else
                <x-slot:sidebar drawer="main-drawer" class="bg-base-200 flex items-center justify-center" collapsible>
                    <x-mary-menu activate-by-route>
                        {{-- <x-mary-menu-item title="AccessiJobs V2" icon="o-bolt" class="" /> --}}
                        @if ($user = auth()->user())
                            <div x-show="!collapsed" x-transition class="avatar my-4 flex justify-center">
                                <div class="w-42 rounded-full">
                                    <img src="{{ asset('images/taguig-logo.svg') }}" />
                                </div>
                            </div>


                            <x-mary-list-item :item="$user" value="name" sub-value="email" no-separator no-hover
                                class="-mx-2 !-my-2 rounded">
                                <x-slot:actions></x-slot:actions>
                            </x-mary-list-item>
                        @endif
                        @if ($currentRoute === 'medicines')
                            <div class="rounded-lg bg-white p-4">
                                <x-mary-menu-item title="Medicines" icon="o-home" link="{{ route('dashboard') }}" />
                                <x-mary-menu-item title="Inventory" icon="o-document" link="{{ route('medicines') }}" />
                                <x-mary-menu-item title="Track History" icon="o-document" link="{{ route('patients') }}" />
                                <x-mary-menu-item title="Activity Logs" icon="o-document" />
                                <x-mary-menu-item title="Citizen Info" icon="o-document" />
                                <x-mary-menu-item title="Transactions" icon="o-document" />
                                <x-mary-menu-item title="User Management" icon="o-document" />
                                <x-mary-menu-sub title="Settings" icon="o-cog-6-tooth">
                                    <x-mary-menu-item title="Profile" icon="o-user" />
                                    <x-mary-menu-item title="Inbox" icon="o-archive-box" link="####" />
                                    <x-mary-menu-item title="Accessibility" icon="o-information-circle" link="####" />
                                </x-mary-menu-sub>
                            </div>

                        @elseif($currentRoute === 'patients')
                            <x-mary-menu-item title="Patient Table" icon="o-home" link="{{ route('dashboard') }}" />
                            <x-mary-menu-item title="Diagnostic" icon="o-document" link="{{ route('medicines') }}" />
                            <x-mary-menu-item title="Medicine Prescriptions" icon="o-document" link="{{ route('patients') }}" />
                            <x-mary-menu-sub title="Settings" icon="o-cog-6-tooth">
                                <x-mary-menu-item title="Profile" icon="o-user" />
                                <x-mary-menu-item title="Inbox" icon="o-archive-box" link="####" />
                                <x-mary-menu-item title="Accessibility" icon="o-information-circle" link="####" />
                            </x-mary-menu-sub>
                        @else
                        @endif
                    </x-mary-menu>
                </x-slot:sidebar>
            @endif

            <x-slot:content class="">
                {{ $slot }}
            </x-slot:content>
        </div>
    </x-mary-main>
    <footer class="footer sm:footer-horizontal bg-[#e5e5e5] text-neutral-content items-center p-2 px-4">
        <aside class="grid-flow-col items-center">
            <div class="avatar">
                <div class="w-10 p rounded-full shadow-lg mr-3">
                    <label class="swap swap-rotate">
                        <input type="checkbox" />
                        <div class="swap-on">
                            <img src="images/taguig-logo.svg" alt="On State" />
                        </div>
                        <div class="swap-off">
                            <img src="images/taguig-logo.svg" alt="Off State" />
                        </div>
                    </label>
                </div>
            </div>
            <p class="text-black font-regular">Copyright © 2025 - All right reserved</p>
        </aside>
        <nav class="grid-flow-col gap-4 md:place-self-center md:justify-self-end">
            <p class="text-black">
                <b>Need any help?</b> Call this number +639673411161
            </p>
        </nav>
    </footer>
    <x-mary-toast />
</body>
@livewireScripts

</html>