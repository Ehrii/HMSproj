<html data-theme="light">

<head>
    {{-- Add this  --}}
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
    <x-mary-main full-width class="bg-base-400 z-50">
        @php
            $currentRoute = Route::currentRoutename();
        @endphp
        <x-slot:sidebar drawer="main-drawer" collapsible class="bg-base-200">
            <x-mary-menu activate-by-route>
                {{-- <x-mary-menu-item title="AccessiJobs V2" icon="o-bolt" class="" /> --}}
                @if ($user = auth()->user())
                    <div class="avatar my-4 flex justify-center">
                        <div class="w-24 rounded-full">
                            <img src="https://img.daisyui.com/images/profile/demo/yellingcat@192.webp" />
                        </div>
                    </div>
                    <x-mary-menu-separator />
                    <x-mary-list-item :item="$user" value="name" sub-value="email" no-separator no-hover
                        class="-mx-2 !-my-2 rounded">
                        <x-slot:actions>
                        </x-slot:actions>
                    </x-mary-list-item>
                    <x-mary-menu-separator />
                @endif
                @if ($currentRoute === 'medicines')
                    <x-mary-menu-item title="Dashboard" icon="o-home" link="{{ route('dashboard') }}" />
                    <x-mary-menu-item title="Medicines" icon="o-document" link="{{ route('medicines') }}" />
                    <x-mary-menu-item title="Patients" icon="o-document" link="{{ route('patients') }}" />
                    <x-mary-menu-item title="Track History" icon="o-document" />
                    <x-mary-menu-sub title="Settings" icon="o-cog-6-tooth">
                        <x-mary-menu-item title="Profile" icon="o-user" />
                        <x-mary-menu-item title="Inbox" icon="o-archive-box" link="####" />
                        <x-mary-menu-item title="Accessibility" icon="o-information-circle" link="####" />
                    </x-mary-menu-sub>
                @else
                    <x-mary-menu-item title="Dashboard" icon="o-home" link="{{ route('dashboard') }}" />
                @endif
            </x-mary-menu>
        </x-slot:sidebar>
        <x-slot:content class="">
            {{ $slot }}
        </x-slot:content>
    </x-mary-main>

    {{--  TOAST area --}}
    <x-mary-toast />
    @livewireScripts

</body>

</html>
