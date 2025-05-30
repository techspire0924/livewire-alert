<div>
    <div 
        class="alert alert-{{ $type }} p-4 rounded shadow mb-4"
        x-data="{ visible: @entangle('visible') }"
        x-show="visible"
<<<<<<< HEAD
        x-init="setTimeout(() => visible = false, 5000)" 
    >
        {{ $message }}
        asfasdfasdfasdf;alskdjklfajskdljf;alksjdflajs;ldkfj;lasjdf;ajs;lkdfjalks
        <button type="button" class="ml-2 text-sm text-gray-600" wire:click="hide">
            &times;
        </button>
    </div>
@endif
<div>
=======
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
>>>>>>> 9946eb4ba701a6dfd595d9d1a4d13eaac2cca296
