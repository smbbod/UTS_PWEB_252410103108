<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title') - JeeSign Studio</title>
</head>
<body class="bg-zinc-950 text-[#F5F0EB] flex flex-col min-h-screen font-sans antialiased">
    
    <!-- Component Navbar -->
    <x-navbar />

    <!-- Slot Konten Utama -->
    <main class="flex-grow p-6 max-w-5xl mx-auto w-full flex items-center justify-center">
        @yield('content')
    </main>

    <!-- Component Footer -->
    <x-footer />

</body>
</html>