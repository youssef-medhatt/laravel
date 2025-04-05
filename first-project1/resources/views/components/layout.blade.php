<!-- resources/views/components/layout.blade.php -->
<html>
<head>
    <title>ITI Blogs</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <!-- Simple Navbar -->
    <nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-white text-lg font-bold">ITI Blogs</a>
            <div>
                <a href="/" class="text-white px-4 py-2 hover:bg-gray-700 rounded">Home</a>
                <a href="/posts" class="text-white px-4 py-2 hover:bg-gray-700 rounded">Posts</a>
                <a href="/about" class="text-white px-4 py-2 hover:bg-gray-700 rounded">About</a>
            </div>
        </div>
    </nav>

    
    <!-- Slot for content -->
    {{ $slot }}
</body>
</html>
