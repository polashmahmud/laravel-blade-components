<x-app>
    <x-model
        title="Deactivate account"
        submit-label="Deactivate"
    >
        <x-slot name="trigger">
            <button @click="on = true">Show Modal</button>
        </x-slot>

        Are you sure you want to deactivate your account? All
        of your data will be permanently removed. This action cannot be undone.
    </x-model>
</x-app>
