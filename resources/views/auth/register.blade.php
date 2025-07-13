<x-guest-layout>
    <form method="POST" action="{{ route('register.post') }}">
        @csrf

        <h2 class="text-2xl font-bold mb-4 text-center">Daftar</h2>

        <input name="name" type="text" placeholder="Nama" class="w-full mb-3 p-2 border rounded" required>
        <input name="email" type="email" placeholder="Email" class="w-full mb-3 p-2 border rounded" required>
        <input name="password" type="password" placeholder="Password" class="w-full mb-3 p-2 border rounded" required>
        <input name="password_confirmation" type="password" placeholder="Konfirmasi Password"
            class="w-full mb-3 p-2 border rounded" required>

        <button class="w-full bg-blue-700 text-white font-semibold p-2 rounded hover:bg-blue-800 hover:scale-105 transition-all duration-300">Daftar</button>

        <p class="text-center mt-4 text-sm">Sudah punya akun? Masuk di sini! <a href="{{ route('login') }}"
                class="text-blue-700 hover:underline">Masuk</a></p>
        <p class="text-center mt-2 text-sm">&copy; {{ now()->year }} Inventory Dashboard</p>
        <p class="text-center mt-2 text-sm">
            Made by M Lintang A W-2424370158
        </p>
    </form>
</x-guest-layout>