@extends('layout')

@section('content')
    <div class="max-w-7xl mx-auto px-4 py-8">
        <div class="bg-white shadow-lg rounded-xl p-8">
            <div class="mb-8 text-center">
                <h2 class="text-4xl font-bold text-slate-800 mb-2">Admin Dashboard</h2>
                <p class="text-slate-500">
                    Selamat datang kembali, <span class="font-semibold text-ocean">{{ Auth::user()->name }}</span>! 👋🏽
                </p>
            </div>

            <div class="flex justify-center">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-2xl w-full mx-auto">
                    <div class="bg-gradient-to-r from-blue-500 to-ocean rounded-xl shadow-lg p-6 text-white flex flex-col items-start">
                        <div class="text-4xl mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-boxes-icon lucide-boxes">
                            <path d="M2.97 12.92A2 2 0 0 0 2 14.63v3.24a2 2 0 0 0 .97 1.71l3 1.8a2 2 0 0 0 2.06 0L12 19v-5.5l-5-3-4.03 2.42Z" />
                            <path d="m7 16.5-4.74-2.85" />
                            <path d="m7 16.5 5-3" />
                            <path d="M7 16.5v5.17" />
                            <path d="M12 13.5V19l3.97 2.38a2 2 0 0 0 2.06 0l3-1.8a2 2 0 0 0 .97-1.71v-3.24a2 2 0 0 0-.97-1.71L17 10.5l-5 3Z" />
                            <path d="m17 16.5-5-3" />
                            <path d="m17 16.5 4.74-2.85" />
                            <path d="M17 16.5v5.17" />
                            <path d="M7.97 4.42A2 2 0 0 0 7 6.13v4.37l5 3 5-3V6.13a2 2 0 0 0-.97-1.71l-3-1.8a2 2 0 0 0-2.06 0l-3 1.8Z" />
                            <path d="M12 8 7.26 5.15" />
                            <path d="m12 8 4.74-2.85" />
                            <path d="M12 13.5V8" />
                        </svg></div>
                        <h3 class="text-xl font-semibold">Total Produk</h3>
                        <p class="text-4xl font-bold mt-2"> {{$totalProducts}} </p>
                    </div>

                    <div class="bg-gradient-to-r from-purple-500 to-indigo-600 rounded-xl shadow-lg p-6 text-white flex flex-col items-start">
                        <div class="text-4xl mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users-icon lucide-users">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                            <path d="M16 3.128a4 4 0 0 1 0 7.744" />
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                            <circle cx="9" cy="7" r="4" />
                        </svg></div>
                        <h3 class="text-xl font-semibold">User Terdaftar</h3>
                        <p class="text-4xl font-bold mt-2"> {{$totalUsers}} </p>
                    </div>
                </div>
            </div>

            <div class="mt-10 text-center">
                <a href="{{ route('admin.products.index') }}"
                    class="inline-block bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-3 rounded-full shadow transition duration-300 transform hover:scale-105">
                    Kelola Produk
                </a>
            </div>
        </div>
    </div>
@endsection
