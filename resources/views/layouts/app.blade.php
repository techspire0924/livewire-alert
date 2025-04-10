<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livewire Alert Example</title>
    <!-- Include Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Livewire Styles -->
    @livewireStyles
    <style>
        /* Basic alert styles */
        .alert { position: relative; }
        .alert-success { background-color: #d1fae5; border-color: #10b981; color: #065f46; }
        .alert-error { background-color: #fee2e2; border-color: #ef4444; color: #b91c1c; }
        .alert-info { background-color: #dbeafe; border-color: #3b82f6; color: #1e40af; }
    </style>
</head>

<body class="bg-gray-100 p-8">
    <div class="container mx-auto">
        @yield('content')
    </div>

    <!-- Livewire Scripts -->
    @livewireScripts
</body>
</html>