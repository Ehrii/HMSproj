@props([
    'title',
    'description',
])

<div class="flex w-full flex-col text-center">
    <heading size="xl">{{ $title }}</heading>
    <flux:subheading>{{ $description }}</flux:subheading>
</div>
