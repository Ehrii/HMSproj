<div>
    <p>This is the Tables page</p>

    <x-mary-table class="" :headers="$suppliersHeaders" :rows="$suppliers" striped @row-click="alert($event.detail.name)" />

    <x-mary-table class="" :headers="$medicineHeaders" :rows="$medicines" striped @row-click="alert($event.detail.name)" />
</div>
