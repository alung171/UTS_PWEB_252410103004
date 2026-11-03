<nav class="bg-emerald-700 text-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center space-x-3">
                <span class="font-bold text-xl tracking-wider">AgriStock</span>
            </div>
            
            @if(isset($username))
            <div class="flex items-center space-x-6 text-sm font-medium">
                <a href="{{ route('dashboard', ['username' => $username]) }}" 
                   class="hover:bg-emerald-600 px-3 py-2 rounded-md transition">Dashboard</a>
                <a href="{{ route('pengelolaan', ['username' => $username]) }}" 
                   class="hover:bg-emerald-600 px-3 py-2 rounded-md transition">Pengelolaan Stok</a>
                <a href="{{ route('profile', ['username' => $username]) }}" 
                   class="hover:bg-emerald-600 px-3 py-2 rounded-md transition">Profil ({{ $username }})</a>
                <a href="{{ route('login') }}" 
                   class="bg-red-500 hover:bg-red-600 px-3 py-1.5 rounded-md text-xs font-bold transition">Logout</a>
            </div>
            @endif
        </div>
    </div>
</nav>