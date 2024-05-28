@props([
    'type' => 'success',
    'colors' => [
        'success' => 'bg-green-400',
        'warning' => 'bg-orange-400',
        'error' => 'bg-red-400',
    ]
])

<section {{ $attributes->merge([ 'class' => "{$colors[$type]} p-4"]) }}>
        <div class="flex items-center justify-between">
            <p>
                {{ $slot }}
            </p>

            <button>&times;</button>
        </div>
</section>
