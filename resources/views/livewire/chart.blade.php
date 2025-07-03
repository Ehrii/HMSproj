<div>
    {{-- <div class="grid gap-5 ">
        <x-mary-button label="Randomize" wire:click="randomize" class="btn-primary" spinner />
        <x-mary-button label="Switch" wire:click="switch" spinner />
    </div> --}}
    <x-mary-chart wire:model="barChart" />


    <div class="grid grid-cols-[1fr_1fr] p-6">
        <x-mary-chart wire:model="pieChart" />
        <x-mary-chart wire:model="pieChart" />
    </div>
</div>
