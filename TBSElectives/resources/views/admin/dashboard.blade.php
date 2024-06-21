<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tournament Bracketing System</title>
    <link rel="shortcut icon" href="{{ asset('TBSfavicon.ico') }}" type="image/x-icon">
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="font-sans text-white antialiased bg-gray-900 min-h-screen flex flex-col">
    <div class="flex justify-between items-center bg-gray-800 p-4 ">
        <!-- Logo on the left -->
        <div class="shrink-0 flex items-center">
            <img src="{{ asset('images/TBS.png') }}" alt="Logo" class="h-10 w-10">
        </div>
        <!-- Logout button on the right -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="border-2 hover:border-gray-600 hover:text-gray-600 text-white font-bold py-2 px-4 rounded">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>

    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold">Admin Dashboard</h1>
        
        
    </div>
</body>

</html>
