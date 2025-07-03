<html data-theme="light">

<head>
    {{-- Add this --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    @livewireStyles
</head>

<body class="font-sans antialiased">

    {{-- The navbar with `sticky` and `full-width` --}}
    <x-mary-nav sticky full-width>

        <x-slot:brand>
            {{-- Drawer toggle for "main-drawer" --}}
            <label for="main-drawer" class="lg:hidden mr-3">
                <x-mary-icon name="o-bars-3" class="cursor-pointer" />
            </label>

            {{-- Brand --}}
            <div>Health Information System</div>
        </x-slot:brand>

        {{-- Right side actions --}}
        <x-slot:actions>
            <x-mary-button label="Messages" icon="o-envelope" link="###" class="btn-ghost btn-sm" responsive />
            <x-mary-button label="Notifications" icon="o-bell" link="###" class="btn-ghost btn-sm" responsive />
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

    {{-- TOAST area --}}
    <x-mary-toast />

</body>
@livewireScripts

</html>