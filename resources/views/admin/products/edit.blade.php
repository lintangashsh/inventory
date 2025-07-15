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
                <textarea id="detail" name="detail" rows="4" class="w-full p-2 border rounded">{{ old('detail', $product->detail) }}</textarea>
            </div>

            <div class="flex gap-3">
                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Simpan
                    Perubahan</button>
                <a href="{{ route('admin.products.index') }}"
                    class="bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">Batal</a>
            </div>
        </form>
        {{-- Toast jika data kosong --}}
        <div id="toast-danger"
            class="hidden fixed top-24 left-1/2 transform -translate-x-1/2 z-50 flex items-center max-w-xs w-full p-4 text-gray-700 bg-white border border-red-200 rounded-lg shadow-lg transition-opacity duration-300 ease-in-out opacity-0"
            role="alert">
            <div class="inline-flex items-center justify-center shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg">
                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
                </svg>
            </div>
            <div class="ml-3 text-sm font-normal">Data produk masih kosong!<br>Isi data produk terlebih dahulu!</div>
        </div>
    </div>
@endsection

{{-- @section('popup')
    <div x-data="{ open: false }" x-show="open"
        class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-30" x-cloak>
        <div class="bg-white rounded-xl shadow p-6 w-80 text-center">
            <h2 class="text-lg font-bold mb-4 text-navy">Perhatian</h2>
            <p class="text-muted mb-4">Kamu harus mengisi data produk terlebih dahulu!</p>
            <button @click="open = false"
                class="bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-800 transition">Oke</button>
        </div>
    </div>
@endsection --}}

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

        document.addEventListener('DOMContentLoaded', () => {
            const form = document.getElementById('productForm');
            const toast = document.getElementById('toast-danger');

            form.addEventListener('submit', function (event) {
                const name = form.querySelector('input[name="name"]').value.trim();
                const detail = form.querySelector('textarea[name="detail"]').value.trim();

                if (!name || !detail) {
                    event.preventDefault();

                    // Tampilkan toast
                    toast.classList.remove('hidden');
                    // Mulai transisi fade in
                    requestAnimationFrame(() => {
                        toast.classList.remove('opacity-0');
                        toast.classList.add('opacity-100');
                    });

                    // Setelah 5 detik, hilangkan
                    setTimeout(() => {
                        toast.classList.remove('opacity-100');
                        toast.classList.add('opacity-0');

                        // Sembunyikan element setelah transisi selesai
                        setTimeout(() => {
                            toast.classList.add('hidden');
                        }, 300);
                    }, 5000);

                    return;
                }
            });
        });
    </script>
@endpush
