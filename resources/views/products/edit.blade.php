{{-- @extends('layout')

@section('content')
    <div class="max-w-xl mx-auto py-10 px-6 bg-white rounded shadow mt-10">
        <h2 class="text-2xl font-bold mb-6 text-navy">✏️ Edit Product</h2>

        <form action="{{ route('admin.products.update', $product) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-sm font-semibold mb-1 text-navy">Product Name</label>
                <input type="text" name="name" value="{{ $product->name }}"
                    class="w-full border border-pale px-4 py-2 rounded" required>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-semibold mb-1 text-navy">Detail</label>
                <textarea name="detail" rows="4" class="w-full border border-pale px-4 py-2 rounded"
                    required>{{ $product->detail }}</textarea>
            </div>

            <button type="submit" class="bg-ocean text-white px-6 py-2 rounded hover:bg-navy transition-all">
                Update Product
            </button>
        </form>
    </div>
@endsection --}}