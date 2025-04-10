@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-2xl font-bold mb-4">Livewire Alert Example</h1>

        <!-- Livewire alert component -->
        <livewire:alert />

        <!-- AlertDemo component with buttons -->
        <livewire:alert-demo />
    </div>
@endsection
