<x-layouts.app>
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <x-mary-header title="Dashboard" icon="o-beaker" icon-classes="bg-error text-white rounded-full  w-7 h-7"
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

        <x-mary-carousel :slides="$slides" class="!h-72" />
        <div class="flex flex-col md:flex-row gap-5">
            <div class="bg-base-300 p-5 rounded-lg w-full md:w-90 flex flex-col gap-5">
                <x-mary-stat title="Messages" value="44" icon="o-envelope" tooltip="Hello" color="text-primary" />

                <x-mary-stat title="Sales" description="This month" value="22.124" icon="o-arrow-trending-up"
                    tooltip-bottom="There" />

                <x-mary-stat title="Lost" description="This month" value="34" icon="o-arrow-trending-down"
                    tooltip-left="Ops!" />

                <x-mary-stat title="Sales" description="This month" value="22.124" icon="o-arrow-trending-down"
                    class="text-orange-500" color="text-pink-500" tooltip-right="Gosh!" />
            </div>

            <div class="bg-base-200  flex my-2 p-6 rounded-lg" x-data="{loading:true}">
                <div class="grid grid-cols-1 md:grid-cols-[3fr_3fr]  my-4 gap-6">
                    <div class="card bg-base-100 h-100 shadow-sm">
                        <figure>
                            <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                alt="Shoes" />
                        </figure>
                        <div class="p-6">
                            <h2 class="card-title">
                                Card Title
                                <div class="badge badge-secondary">NEW</div>
                            </h2>
                            <p>A card component has a figure, a body part, and inside body there are title and actions
                                parts
                            </p>
                            <div class="card-actions justify-end">
                                <div class="badge badge-outline">Fashion</div>
                                <div class="badge badge-outline">Products</div>
                            </div>
                        </div>

                        <div class="card-body mt-2">

                        </div>
                    </div>

                    <div class="card bg-base-100 h-100 shadow-sm">
                        <figure>
                            <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                alt="Shoes" />
                        </figure>
                        <div class="p-6">
                            <h2 class="card-title">
                                Card Title
                                <div class="badge badge-secondary">NEW</div>
                            </h2>
                            <p>A card component has a figure, a body part, and inside body there are title and actions
                                parts
                            </p>
                            <div class="card-actions justify-end">
                                <div class="badge badge-outline">Fashion</div>
                                <div class="badge badge-outline">Products</div>
                            </div>
                        </div>

                        <div class="card-body mt-2 flex justify-end">
                        </div>
                    </div>
                            <x-mary-button label="View Service" class="btn-primary " />

                        </div>
                    </div>

                </div>
            </div>
        </div>







        <!-- @livewire(name: 'chart') -->
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