

<head>
    {{-- Add this  --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
            <div>App</div>
        </x-slot:brand>
 
        {{-- Right side actions --}}
        <x-slot:actions>
            <x-mary-button label="Messages" icon="o-envelope" link="###" class="btn-ghost btn-sm" responsive />
            <x-mary-button label="Notifications" icon="o-bell" link="###" class="btn-ghost btn-sm" responsive />
        </x-slot:actions>
    </x-mary-nav>
 
    {{-- The main content with `full-width` --}}
  <x-mary-main full-width class="bg-base-400 z-50">
        <x-slot:sidebar drawer="main-drawer" collapsible class="bg-base-200">
            <x-mary-menu activate-by-route>
                <x-mary-menu-item title="AccessiJobs V2" icon="o-bolt" class="" />
                @if($user = auth()->user())
                    <x-mary-menu-separator />
                    <x-mary-list-item :item="$user" value="name" sub-value="email" no-separator no-hover
                        class="-mx-2 !-my-2 rounded">
                        <x-slot:actions>
                        </x-slot:actions>
                    </x-mary-list-item>
                    <x-mary-menu-separator />
                @endif
                @if ($user->user_type === 'admin')
                    <x-mary-menu-item title="PWD Trainings" icon="o-home"  />
                    <x-mary-menu-item title="Employment Analytics" icon="o-document"  />
                    <x-mary-menu-item title="PWD Training Analytics" icon="o-document" />

                    <x-mary-menu-item title="Manage Training Modules" icon="o-document"/>

                    <x-mary-menu-item title="Manage Users" icon="o-document" />
                    <x-mary-menu-item title="Audit Trail" icon="o-document" />
                    <x-mary-menu-item title="Messages" icon="o-document"/>
                    <x-mary-menu-item title="Manage Videos" icon="o-document" />

                    {{-- Admin menu items --}}
                @else
                    <x-mary-menu-item title="Home" icon="o-home" " />
                    <x-mary-menu-item title="Upload Resume" icon="o-document"  />
                    <x-mary-menu-item title="My Saved Jobs" icon="o-bookmark-square"  />
                    <x-mary-menu-item title="My Applications" icon="o-paper-airplane" />
                    <x-mary-menu-item title="Top Companies" icon="o-building-office" />
                    <x-mary-menu-item title="Trainings" icon="o-academic-cap" />
                @endif

                <x-mary-menu-sub title="Settings" icon="o-cog-6-tooth">
                    <x-mary-menu-item title="Profile" icon="o-user"  />
                    <x-mary-menu-item title="Inbox" icon="o-archive-box" link="####" />
                    <x-mary-menu-item title="Accessibility" icon="o-information-circle" link="####" />
                </x-mary-menu-sub>
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