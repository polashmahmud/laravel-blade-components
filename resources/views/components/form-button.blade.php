<x-form method="{{ $method }}" action="{{ $action }}">
    <div>
        <button type="submit" class="{{ $attributes }}">
            {{ $slot }}
        </button>
    </div>
</x-form>
