<header class="bg-zinc-900 border-b border-zinc-800/80 px-6 py-4 flex justify-between items-center shadow-md">
    <h1 class="text-xl font-black tracking-wider text-[#F5F0EB]">
        JeeSign <span class="text-amber-400">Studio</span>
    </h1>
    
    <nav class="space-x-6 font-medium text-sm">
        <a href="{{ route('dashboard') }}" class="text-stone-300 hover:text-amber-400 transition">Dashboard</a>
        <a href="{{ route('pengelolaan') }}" class="text-stone-300 hover:text-amber-400 transition">Pengelolaan</a>
        <a href="{{ route('profile') }}" class="text-stone-300 hover:text-amber-400 transition">Profil</a>
        <a href="{{ route('login') }}" class="text-amber-400 hover:text-amber-300 font-semibold ml-4 border border-amber-400/40 px-3 py-1.5 rounded-lg hover:border-amber-400 transition">Keluar</a>
    </nav>
</header>