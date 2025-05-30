@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-2xl font-bold mb-4">Livewire Alert Example</h1>

        <!-- Livewire alert component -->
        <livewire:alert />

<<<<<<< HEAD
        <!-- Button to trigger the alert -->
        <button wire:click="$emitTo('alert', 'showAlert', 'success', 'Operation completed successfully!')">Show Success Alert</button>
        <button wire:click="$emitTo('alert', 'showAlert', 'error', 'Something went wrong!')">Show Error Alert</button>
=======
        <!-- AlertDemo component with buttons -->
        <livewire:alert-demo />
>>>>>>> 9946eb4ba701a6dfd595d9d1a4d13eaac2cca296
    </div>
@endsection