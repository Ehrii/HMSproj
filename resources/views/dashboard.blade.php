<x-layouts.app>
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <x-mary-header title="Dashboard" icon="o-beaker" icon-classes="bg-red-custom text-white rounded-full  w-7 h-7"
            style="margin-bottom:0%" separator />

        @php
            $slides = [
                [
                    'image' => 'https://picsum.photos/id/1015/800/400',
                    'title' => 'Front end developers',
                    'description' => 'We love last week frameworks.',
                    'url' => '/docs/installation',
                    'urlText' => 'Get started',
                ],
                [
                    'image' => 'https://picsum.photos/id/1025/800/400',
                    'title' => 'Full stack developers',
                    'description' => 'Where burnout is just a fancy term for Tuesday.',
                ],
                [
                    'image' => 'https://picsum.photos/id/1037/800/400',
                    'title' => 'Full stack developers',
                    'description' => 'Where burnout is just a fancy term for Tuesday.',
                ],
                [
                    'image' => 'https://picsum.photos/id/1037/800/400',
                    'title' => 'Full stack developers',
                    'description' => 'Where burnout is just a fancy term for Tuesday.',
                ],
            ];
        @endphp

        <x-mary-carousel :slides="$slides" autoplay class="!h-72" />
        <div class="flex flex-col md:flex-row gap-5">
            <div class="bg-base-300 p-5 rounded-lg w-full md:w-90 flex flex-col gap-5">
                <x-mary-stat title="Messages" value="44" icon="o-envelope" tooltip="Hello" color="text-red-custom" />

                <x-mary-stat title="Sales" description="This month" value="22.124" icon="o-arrow-trending-up"
                    tooltip-bottom="There" color="text-red-custom" />

                <x-mary-stat title="Lost" description="This month" value="34" icon="o-arrow-trending-down"
                    tooltip-left="Ops!" color="text-red-custom" />

                <x-mary-stat title="Sales" description="This month" value="22.124" icon="o-arrow-trending-down"
                    class="text-orange-500" color="text-red-custom" tooltip-right="Gosh!" />
            </div>

            <div class="bg-base-300 flex p-6 rounded-lg" x-data="{loading:true}">
                <div class="grid grid-cols-1 md:grid-cols-[3fr_3fr]  my-4 gap-6">
                    <div class="relative rounded-lg shadow-md hover:shadow-lg overflow-hidden duration-300">
                        <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                            alt="Shoes" class="w-full h-full object-cover" />

                        <div class="absolute inset-0 bg-black/50   z-25"></div>

                        <div
                            class="absolute inset-0 flex flex-col justify-between hover:bg-black/50 duration-300 p-6 z-50">
                            <div>
                                <div class="flex items-center space-x-2">
                                    <x-hero <h2 class="text-white text-xl font-semibold">Medicine Tracker</h2>
                                        <span
                                            class="bg-blue-custom text-white text-xs font-bold px-2 py-1 rounded">NEW</span>
                                </div>
                                <p class="text-white text-md mt-2">
                                    A card component has a figure, a body part, and inside body there are title and
                                    actions parts.
                                </p>
                            </div>

                            <div class="mt-4">
                                {{-- <div class="flex gap-6 mb-2">
                                    <div class="badge bg-blue-custom border-0 text-white p-3">Secondary</div>
                                    <div class="badge bg-blue-custom border-0 text-white p-3">Secondary</div>
                                </div>
                                <div class="border-t border-white border-opacity-50 my-2"></div> --}}
                                <div class="flex justify-end">
                                    <a href="{{ route('medicines') }}"
                                        class="bg-red-600 hover:bg-red-700 text-white text-sm font-medium px-4 py-2 rounded transition"
                                        wire:navigate>
                                        View Medicines
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="relative rounded-lg shadow-md hover:shadow-lg overflow-hidden duration-300">
                        <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                            alt="Shoes" class="w-full h-full object-cover" />

                        <div class="absolute inset-0 bg-black/50 z-25"></div>

                        <div
                            class="absolute inset-0 flex flex-col justify-between hover:bg-black/50 duration-300 p-6 z-50">
                            <div>
                                <div class="flex items-center space-x-2">
                                    <h2 class="text-white text-xl font-semibold">Patient Checker</h2>
                                    <span
                                        class="bg-blue-custom text-white text-xs font-bold px-2 py-1 rounded">NEW</span>
                                </div>
                                <p class="text-white text-md mt-2">
                                    A card component has a figure, a body part, and inside body there are title and
                                    actions parts.
                                </p>
                            </div>

                            <div class="mt-4">
                                {{-- <div class="flex gap-6 mb-2">
                                    <div class="badge badge-soft bg-blue-custom border-0 text-white p-3">Secondary</div>
                                    <div class="badge badge-soft bg-blue-custom border-0 text-white p-3">Secondary</div>
                                </div>
                                <div class="border-t border-white border-opacity-50 my-2"></div> --}}
                                <div class="flex justify-end">
                                    <a href="{{ route('patients') }}"
                                        class="bg-red-600 hover:bg-red-700 text-white text-sm font-medium px-4 py-2 rounded transition"
                                        wire:navigate>
                                        View Patients
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="stats bg-base-100 border-base-300 border">
                        <div class="stat">
                            <div class="stat-title">Overview of Medicine</div>
                            <div class="stat-value">$89,400</div>
                            <div class="stat-actions">
                                <button class="btn btn-xs btn-success">Add funds</button>
                            </div>
                        </div>

                        <div class="stat">
                            <div class="stat-title">Overview of Patients</div>
                            <div class="stat-value">$89,400</div>
                            <div class="stat-actions">
                                <button class="btn btn-xs">Withdrawal</button>
                                <button class="btn btn-xs">Deposit</button>
                            </div>
                        </div>
                    </div>

                    <div class="stats bg-base-100 border-base-300 border">
                        <div class="stat">
                            <div class="stat-title">Overview of Medicine</div>
                            <div class="stat-value">$89,400</div>
                            <div class="stat-actions">
                                <button class="btn btn-xs btn-success">Add funds</button>
                            </div>
                        </div>

                        <div class="stat">
                            <div class="stat-title">Overview of Patients</div>
                            <div class="stat-value">$89,400</div>
                            <div class="stat-actions">
                                <button class="btn btn-xs">Withdrawal</button>
                                <button class="btn btn-xs">Deposit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- @livewire(name: 'chart') --}}''
        <!-- <div class="join flex justify-end my-8">
            <div>
                <div>
                    <input class="input w-75 join-item" placeholder="Search" />
                </div>
            </div>
            <select class="select join-item w-25 ">
                <option disabled selected>Filter</option>
                <option>Sci-fi</option>
                <option>Drama</option>
                <option>Action</option>
            </select>
        </div> -->
        <div class="overflow-x-auto bg-base-200 rounded-lg">

        </div>
    </div>
</x-layouts.app>