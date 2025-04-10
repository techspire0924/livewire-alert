<div>
    <div 
        class="alert alert-{{ $type }} p-4 rounded shadow mb-4"
        x-data="{ visible: $wire.entangle('visible') }"
        x-show="visible"
        x-init="$wire.on('hide-alert', ({ timeout }) => setTimeout(() => visible = false, timeout))" 
        x-cloak
    >
        <div class="flex justify-between items-center">
            <span>{{ $message }}</span>
            <button type="button" class="ml-2 text-sm text-gray-600 font-bold" wire:click="hide">
                &times;
            </button>
        </div>
    </div>
</div>
