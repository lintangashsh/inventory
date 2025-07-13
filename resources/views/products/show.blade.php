@extends('layout')

@section('content')
    <div class="max-w-2xl mx-auto py-10 px-6 bg-white rounded-xl shadow mt-10">
        <h2 class="text-2xl font-bold mb-6 text-blue-700">👁️ Product Detail</h2>

        <div class="mb-4">
            <h3 class="text-lg font-semibold text-salte-800">Nama Produk</h3>
            <p class="text-gray-800">{{ $product->name }}</p>
        </div>

        <div class="mb-4">
            <h3 class="text-lg font-semibold text-slate-800">Detail</h3>
            <p class="text-gray-800">{{ $product->detail }}</p>
        </div>

        <a href="{{ url()->previous() }}"
            class="btn bg-blue-700 text-white font-semibold hover:bg-blue-800 duration-300 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left-icon lucide-arrow-left"><path d="m12 19-7-7 7-7"/><path d="M19 12H5"/></svg>
            Kembali
        </a>
    </div>
@endsection