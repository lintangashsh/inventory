@extends('layout')

@section('content')
    <div class="max-w-lg mx-auto p-6 bg-white rounded-lg shadow">
        <h2 class="text-2xl font-semibold mb-6">Edit Produk</h2>

        <form action="{{ route('admin.products.update', $product->id) }}" method="POST" id="product-form">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-gray-700 mb-2">Nama Produk</label>
                <input type="text" id="name" name="name" value="{{ old('name', $product->name) }}"
                    class="w-full p-2 border rounded">
            </div>

            <div class="mb-6">
                <label for="detail" class="block text-gray-700 mb-2">Detail Produk</label>
                <textarea id="detail" name="detail" rows="4"
                    class="w-full p-2 border rounded">{{ old('detail', $product->detail) }}</textarea>
            </div>

            <div class="flex gap-3">
                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Simpan
                    Perubahan</button>
                <a href="{{ route('admin.products.index') }}"
                    class="bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">Batal</a>
            </div>
        </form>
    </div>
@endsection

@section('popup')
    <div x-data="{ open: false }" x-show="open"
        class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-30" x-cloak>
        <div class="bg-white rounded-xl shadow p-6 w-80 text-center">
            <h2 class="text-lg font-bold mb-4 text-navy">Perhatian</h2>
            <p class="text-muted mb-4">Kamu harus mengisi data produk terlebih dahulu!</p>
            <button @click="open = false"
                class="bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-800 transition">Oke</button>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.querySelector('#product-form');
            const popup = document.querySelector('[x-data]');

            form.addEventListener('submit', function (e) {
                const name = form.querySelector('input[name="name"]').value.trim();
                const detail = form.querySelector('textarea[name="detail"]').value.trim();

                if (!name || !detail) {
                    e.preventDefault();
                    popup.__x.$data.open = true;
                }
            });
        });
    </script>
@endpush