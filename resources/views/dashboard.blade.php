<x-layouts.app>
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <x-mary-header title="Dashboard" icon="o-beaker" icon-classes="bg-error text-white rounded-full  w-7 h-7"
            style="margin-bottom:0%" separator />

        <div class="grid grid-cols-1 md:grid-cols-[2fr_2fr] lg:grid-cols-[1fr_1fr_1fr_1fr] my-4 gap-6 ">
            <x-mary-stat title="Messages" value="44" icon="o-envelope" tooltip="Hello" color="text-error"
                tooltip-bottom="There" class="bg-base-300" />

            <x-mary-stat title="Sales" description="This month" value="22.124" icon="o-arrow-trending-up"
                tooltip-bottom="There" color="text-error" class="bg-base-300" />

            <x-mary-stat title="Lost" description="This month" value="34" icon="o-arrow-trending-down"
                tooltip-bottom="Ops!" color="text-error" class="bg-base-300" />

            <x-mary-stat title="Sales" description="This month" value="22.124" icon="o-arrow-trending-down"
                class=" bg-base-300" color="text-error" tooltip-bottom="Gosh!" />
        </div>
        @livewire('chart')
        <div class="join flex justify-end my-8">
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
        </div>
        <div class="overflow-x-auto bg-base-200 rounded-lg">
            <table class="table">
                <!-- head -->
                <thead>
                    <tr>
                        <th>

                        </th>
                        <th>Name</th>
                        <th>Job</th>
                        <th>Favorite Color</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    <tr>
                        <th>

                        </th>
                        <td>
                            <div class="flex items-center gap-3">
                                <div class="avatar">
                                    <div class="mask mask-squircle h-12 w-12">
                                        <img src="https://img.daisyui.com/images/profile/demo/2@94.webp"
                                            alt="Avatar Tailwind CSS Component" />
                                    </div>
                                </div>
                                <div>
                                    <div class="font-bold">Hart Hagerty</div>
                                    <div class="text-sm opacity-50">United States</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            Zemlak, Daniel and Leannon
                            <br />
                            <span class="badge badge-ghost badge-sm">Desktop Support Technician</span>
                        </td>
                        <td>Purple</td>
                        <th>
                            <x-mary-button label="Hi!" class="btn-error text-white" />
                        </th>
                    </tr>
                </tbody>
                <!-- foot -->
            </table>
        </div>
    </div>
</x-layouts.app>
