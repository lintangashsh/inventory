<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    // Tampilkan semua produk masih untuk admin
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('admin.products.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    // Tampilkan semua produk untuk user
    public function indexUser()
    {
        $products = Product::latest()->paginate(10);
        return view('products.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    // Tampilkan form tambah produk untuk admin
    public function create()
    {
        return view('admin.products.create');
    }

    // Tampilkan form tambah produk untuk user
    public function createProductUser()
    {
        return view('products.create');
    }

    // Simpan produk baru untuk admin
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'detail' => 'nullable|string',
        ]);

        Product::create([
            'name' => $request->name,
            'detail' => $request->detail,
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    // Simpan produk baru untuk User
    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'detail' => 'nullable|string',
        ]);

        Product::create([
            'name' => $request->name,
            'detail' => $request->detail,
        ]);

        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    // Tampilkan detail produk untuk admin
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    // Tampilkan detail produk untuk user
    public function showUser(Product $product)
    {
        return view('products.show', compact('product'));
    }

    // Tampilkan form edit (admin only)
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    // Simpan perubahan data produk
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'detail' => 'nullable|string',
        ]);

        $product->update([
            'name' => $request->name,
            'detail' => $request->detail,
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil diupdate!');
    }

    // Hapus produk (admin only)
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil dihapus!');
    }
}
