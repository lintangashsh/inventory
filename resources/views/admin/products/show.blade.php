@extends('layout')

@section('content')
    <div class="min-h-screen bg-cloud p-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-navy">📦 Product Detail</h1>
            <a href="{{ route('admin.products.index') }}"
                class="bg-muted text-white px-4 py-2 rounded hover:bg-navy transition-all">
                ⬅️ Kembali ke Dashboard Admin
            </a>
        </div>

        <div class="bg-white shadow-md rounded p-6 max-w-xl mx-auto">
            <div class="mb-4">
                <h2 class="text-xl font-bold text-navy">📝 Nama Produk:</h2>
                <p class="text-gray-700 text-sm">{{ $product->name }}</p>
            </div>

            <div class="mb-4">
                <h2 class="text-xl font-bold text-navy">📋 Detail Produk:</h2>
                <p class="text-gray-700 text-sm whitespace-pre-line">{{ $product->detail }}</p>
            </div>

            <div class="mt-6 text-right">
                <a href="{{ route('admin.products.edit', $product->id) }}"
                    class="inline-block bg-ocean text-white px-5 py-2 rounded hover:bg-navy transition-all">
                    ✏️ Edit Produk
                </a>
            </div>
        </div>
    </div>
@endsection