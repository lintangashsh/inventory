@extends('admin.layout')

@section('content')
    <div class="max-w-lg mx-auto p-6 bg-white rounded-lg shadow">
        <h2 class="text-2xl font-semibold mb-6">Update Produk</h2>
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700">Nama Produk</label>
                <input type="text" name="name" value="{{ $product->name }}" class="w-full p-2 border rounded" required>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700">Detail Produk</label>
                <textarea name="detail" class="w-full p-2 border rounded" rows="4"
                    required>{{ $product->detail }}</textarea>
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
        </form>
    </div>
@endsection