@extends('admin.layout')

@section('content')
    <div class="max-w-lg mx-auto p-6 bg-white rounded-lg shadow">
        <h2 class="text-2xl font-semibold mb-6">Edit Produk</h2>

        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-gray-700 mb-2">Nama Produk</label>
                <input type="text" id="name" name="name" value="{{ old('name', $product->name) }}"
                    class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-6">
                <label for="detail" class="block text-gray-700 mb-2">Detail Produk</label>
                <textarea id="detail" name="detail" rows="4"
                    class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>{{ old('detail', $product->detail) }}</textarea>
            </div>

            <div class="flex gap-3">
                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Simpan
                    Perubahan</button>
                <a href="{{ route('products.index') }}" class="bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">Batal</a>
            </div>
        </form>
    </div>
@endsection