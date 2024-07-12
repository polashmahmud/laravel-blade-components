@props(['alignment' => 'left'])

@php
$alignmentClass = [
    'left' => 'left-0',
    'right' => 'right-0'
];
@endphp

<div
    class="relative"
    x-data="{ open: false}"
    @click.away="open = false"
>
    <div @click="open = !open">
        {{ $trigger }}
    </div>
    <div
        class="absolute {{ $alignmentClass[$alignment] }} z-20 bg-white text-black rounded shadow-md py-2 mt-1 w-40"
        x-show="open"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    >
        {{ $slot }}
    </div>
</div>
