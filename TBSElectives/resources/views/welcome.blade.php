<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tournament Bracketing System</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans text-gray-900 antialiased bg-gray-900 min-h-screen flex flex-col">
    @if (Route::has('login'))
    <nav class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="shrink-0 flex items-center">
                        <!--Add logo here-->
                        <img src="/path/to/your/logo.png" alt="Logo" class="h-8 w-8">
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight hover:text-gray-600 dark:hover:text-gray-400">
                            Log in
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight hover:text-gray-600 dark:hover:text-gray-400">
                                Register
                            </a>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </nav>
    @endif

    <!-- Main content -->
    <main class="flex-grow">
        <!-- Your main content goes here -->
         <img src="https://images.pexels.com/photos/3839696/pexels-photo-3839696.jpeg">

    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4 text-center">
        <div class="container mx-auto">
            <p class="text-sm">&copy; 2024 Tournament Bracketing System. All rights reserved.<br>
                Designed by Chester Andrei C. Garcia | Powered by Tailwind CSS</p>
        </div>
    </footer>
</body>
</html>
