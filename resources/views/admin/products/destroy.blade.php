@extends('admin.layout')

@section('content')
    <div class="max-w-lg mx-auto p-6 bg-white rounded-lg shadow">
        <h2 class="text-2xl font-semibold mb-6 text-red-600">Hapus Produk</h2>
        <p class="mb-4">Apakah kamu yakin ingin menghapus produk <strong>{{ $product->name }}</strong>?</p>

        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="flex gap-3">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Hapus</button>
            <a href="{{ route('products.index') }}" class="bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">Batal</a>
        </form>
    </div>
@endsection