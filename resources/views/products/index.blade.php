@extends('layout')

@section('content')
    <div class="min-h-screen bg-cloud rounded-xl p-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-slate-700 flex items-center gap-2">
                <i data-lucide="package-search" class="w-8 h-8 text-blue-700"></i>
                Produk Inventori
            </h1>
            @if (auth()->user()->role === 'admin')
                <a href="{{ route('admin.products.create') }}"
                    class="bg-ocean text-white px-4 py-2 rounded hover:bg-navy transition-all">
                    + Add New Product
                </a>
            @else
                <a href="{{ route('products.create') }}"
                    class="btn bg-blue-700 text-white font-semibold hover:bg-blue-800 duration-300 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-plus-icon lucide-circle-plus"><circle cx="12" cy="12" r="10"/><path d="M8 12h8"/><path d="M12 8v8"/></svg>
                    Tambah Produk
                </a>
            @endif
        </div>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto ">
            {{-- <table class="min-w-full divide-y divide-pale"> --}}
            <table class="table">
                <thead>
                    <tr class="text-lg">
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Detail produk</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                        <tr class="hover:bg-blue-200 border-b-2 border-slate-200 duration-300">
                            <td>{{ ++$i }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->detail }}</td>
                            <td class="">
                                <a href="{{ auth()->user()->role === 'admin' ? route('admin.products.show', $product) : route('products.show', $product) }}"
                                    class="btn btn-success">Lihat
                                </a>


                                @if(auth()->user()->role === 'admin')
                                    <a href="{{ route('admin.products.edit', $product) }}"
                                        class="text-yellow-600 hover:underline">✏️ Edit</a>
                                    <form class="inline" action="{{ route('admin.products.destroy', $product) }}" method="POST"
                                        onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline">🗑️ Hapus</button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">Tidak Ada Produk Tersimpan</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="mt-4">{{ $products->links() }}</div>
    </div>
@endsection