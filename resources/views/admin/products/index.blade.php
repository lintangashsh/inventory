@extends('layout')

@section('content')
    <div class="min-h-screen bg-cloud p-8">
        <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4">
    <h1 class="text-3xl font-bold text-slate-700 flex items-center gap-2">
        <i data-lucide="package-search" class="w-8 h-8 text-blue-700"></i>
        Inventory Product
    </h1>
    <div class="flex flex-wrap gap-3">
        <a href="{{ route('admin.dashboard') }}"
            class="flex items-center gap-2 bg-muted text-white px-4 py-2 rounded-full shadow-sm hover:bg-slate-800 transition-all">
            <i data-lucide="arrow-left" class="w-5 h-5"></i>
            Dashboard
        </a>
        <a href="{{ route('admin.products.create') }}"
            class="flex items-center gap-2 bg-blue-600 text-white px-4 py-2 rounded-full shadow-sm hover:bg-blue-800 transition-all">
            <i data-lucide="plus" class="w-5 h-5"></i>
            Tambah Produk
        </a>
    </div>
</div>
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @forelse ($products as $product)
                <div class="bg-white rounded-lg shadow-md p-5 hover:shadow-lg transition-all">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-lg font-bold text-navy truncate w-3/4">{{ $product->name }}</h2>
                        <i data-lucide="package" class="w-6 h-6 text-blue-700"></i>
                    </div>
                    <p class="text-muted text-sm mb-4">{{ Str::limit($product->detail, 100) }}</p>
                    <div class="flex flex-wrap gap-2">
                        <a href="{{ route('admin.products.show', $product->id) }}"
                            class="bg-cloud text-blue-700 px-3 py-1 rounded hover:bg-pale transition text-sm flex items-center gap-1">
                            <i data-lucide="eye" class="w-4 h-4"></i> Lihat
                        </a>
                        <a href="{{ route('admin.products.edit', $product->id) }}"
                            class="bg-green-700 text-white px-3 py-1 rounded hover:bg-green-800 transition text-sm flex items-center gap-1">
                            <i data-lucide="edit-3" class="w-4 h-4"></i> Ubah
                        </a>
                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST"
                            onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 transition text-sm flex items-center gap-1">
                                <i data-lucide="trash-2" class="w-4 h-4"></i> Hapus
                            </button>
                        </form>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center text-muted py-6">
                    <i data-lucide="box" class="w-12 h-12 mx-auto mb-2 text-pale"></i>
                    Tidak ada produk ditemukan.
                </div>
            @endforelse
        </div>

        <div class="mt-6">
            {!! $products->links() !!}
        </div>
    </div>
@endsection
