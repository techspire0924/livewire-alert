<div>
@if($visible)
    <div 
        class="alert alert-{{ $type }} p-4 rounded shadow mb-4"
        x-data="{ visible: @entangle('visible') }"
        x-show="visible"
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
