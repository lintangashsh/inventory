@extends('layout')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">
    <div class="bg-white shadow-lg rounded-xl p-8">
        <div class="mb-8 text-center">
            <h2 class="text-4xl font-bold text-slate-800 mb-2">📊 Admin Dashboard</h2>
            <p class="text-slate-500">
                Selamat datang kembali, <span class="font-semibold text-ocean">{{ Auth::user()->name }}</span>! 🎉
            </p>
        </div>

        <div class="flex justify-center">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-2xl w-full mx-auto">
                <div class="bg-gradient-to-r from-blue-500 to-ocean rounded-xl shadow-lg p-6 text-white flex flex-col items-start">
                    <div class="text-4xl mb-2">📦</div>
                    <h3 class="text-xl font-semibold">Total Produk</h3>
                    <p class="text-4xl font-bold mt-2"> {{$totalProducts}} </p>
                </div>

                <div class="bg-gradient-to-r from-purple-500 to-indigo-600 rounded-xl shadow-lg p-6 text-white flex flex-col items-start">
                    <div class="text-4xl mb-2">👥</div>
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
