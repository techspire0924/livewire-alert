@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Livewire Alert Example</h1>

        <!-- Livewire alert component -->
        <livewire:alert />

        <!-- Button to trigger the alert -->
        <button wire:click="$emitTo('alert', 'showAlert', 'success', 'Operation completed successfully!')">Show Success Alert</button>
        <button wire:click="$emitTo('alert', 'showAlert', 'error', 'Something went wrong!')">Show Error Alert</button>
    </div>
@endsection