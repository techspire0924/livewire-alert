<html>
<head>
    @livewireStyles
<<<<<<< HEAD
</head>

<body>
=======
    <style>
        /* Basic alert styles */
        .alert { position: relative; }
        .alert-success { background-color: #d1fae5; border-color: #10b981; color: #065f46; }
        .alert-error { background-color: #fee2e2; border-color: #ef4444; color: #b91c1c; }
        .alert-info { background-color: #dbeafe; border-color: #3b82f6; color: #1e40af; }
        
        /* Alpine.js x-cloak */
        [x-cloak] { display: none !important; }
    </style>
</head>

<body class="bg-gray-100 p-8">
    <div class="container mx-auto">
        @yield('content')
    </div>
    
    <!-- Livewire Scripts -->
>>>>>>> 9946eb4ba701a6dfd595d9d1a4d13eaac2cca296
    @livewireScripts
    @yield('content')
</body>
<<<<<<< HEAD
<html>
=======
</html>
>>>>>>> 9946eb4ba701a6dfd595d9d1a4d13eaac2cca296
