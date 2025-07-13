<x-guest-layout>
    <form method="POST" action="{{ route('login.post') }}">
        @csrf

        <h2 class="text-2xl font-bold mb-4 text-center">Masuk</h2>

        {{-- Email --}}
        <div class="mb-4">
            <input 
                name="email" 
                type="email" 
                placeholder="Email" 
                value="{{ old('email') }}"
                class="w-full p-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-ocean"
                required>
            @error('email')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Password --}}
        <div class="mb-4">
            <input 
                name="password" 
                type="password" 
                placeholder="Password" 
                class="w-full p-3 border rounded-xl focus:outline-none focus:ring-2 focus:ring-ocean"
                required>
            @error('password')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        

        <button class="w-full bg-blue-800 text-white font-semibold p-2 rounded-xl hover:bg-blue-900 hover:scale-105 transition-all duration-300">Masuk</button>

        <p class="text-center mt-4 text-sm">Belum punya akun? 
            <a href="{{ route('register') }}"
                class="text-blue-700 hover:underline duration-300">Daftar akun di sini!</a>
            </p>
        <p class="text-center mt-2 text-sm">&copy; {{ now()->year }} Inventory Dashboard</p>
        <p class="text-center mt-2 text-sm">
            Made by M Lintang A W-2424370158
        </p>
    </form>
</x-guest-layout>