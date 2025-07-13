@extends('layout')

@section('content')
    <div class="min-h-screen bg-cloud p-8">
        <div class="flex justify-between items-center mb-6">
            <div class="text-3xl font-bold text-navy">Tambah Produk Baru</div>
            <a href="{{ route('admin.products.index') }}"
                class="flex items-center gap-2 bg-muted text-white px-4 py-2 rounded-full shadow-sm hover:bg-slate-800 transition-all">
                <i data-lucide="arrow-left" class="w-5 h-5"></i>
                Kembali ke Dashboard
            </a>
        </div>

        <form action="{{ route('admin.products.store') }}" method="POST"
            class="bg-white p-6 rounded shadow-md max-w-xl mx-auto" id="product-form">
            @csrf
            <div class="mb-4">
                <label class="block text-navy font-semibold mb-1">Nama Produk</label>
                <input type="text" name="name" value="{{ old('name') }}"
                    class="w-full px-4 py-2 border border-pale rounded focus:outline-none focus:ring focus:border-ocean"
                    placeholder="Masukkan nama produk">
            </div>

            <div class="mb-4">
                <label class="block text-navy font-semibold mb-1">Detail Produk</label>
                <textarea name="detail" rows="4"
                    class="w-full px-4 py-2 border border-pale rounded focus:outline-none focus:ring focus:border-ocean"
                    placeholder="Masukkan detail produk">{{ old('detail') }}</textarea>
            </div>

            <div class="text-right">
                <button type="submit"
                    class="bg-blue-700 text-white px-6 py-2 rounded hover:bg-blue-800 transition-all">Simpan Produk</button>
            </div>
        </form>
    </div>
@endsection

@section('popup')
    <div id="popup-notification" x-data="{ open: false }" x-show="open" x-transition
        class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-30" style="display: none">
        <div class="bg-white rounded-xl shadow p-6 w-80 text-center">
            <h2 class="text-lg font-bold mb-4 text-navy">Perhatian</h2>
            <p class="text-muted mb-4">Kamu harus mengisi data produk terlebih dahulu!</p>
            <button @click="open = false"
                class="bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-800 transition">Oke</button>
        </div>
    </div>
@endsection

@push('scripts')
    <script defer>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelector('#product-form').addEventListener('submit', function (event) {
                const name = document.querySelector('input[name="name"]').value.trim();
                const detail = document.querySelector('textarea[name="detail"]').value.trim();

                if (!name || !detail) {
                    event.preventDefault();
                    document.querySelector('#popup-notification').__x.$data.open = true;
                }
            });
        });
    </script>
@endpush