@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded shadow">
  <h2 class="text-2xl font-semibold mb-4">Tambah Barang</h2>
  <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-4">
      <label for="nama_barang" class="block text-sm font-medium text-gray-700">Nama Barang</label>
      <input type="text" name="nama_barang" id="nama_barang" class="w-full p-2 border border-gray-300 rounded" required>
    </div>

    <div class="mb-4">
      <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
      <textarea name="deskripsi" id="deskripsi" class="w-full p-2 border border-gray-300 rounded" required></textarea>
    </div>

    <div class="mb-4">
      <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
      <input type="number" name="harga" id="harga" class="w-full p-2 border border-gray-300 rounded" required>
    </div>

    <div class="mb-4">
      <label for="stok" class="block text-sm font-medium text-gray-700">Stok</label>
      <input type="number" name="stok" id="stok" class="w-full p-2 border border-gray-300 rounded" required>
    </div>

    <div class="mb-4">
      <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori</label>
      <input type="text" name="kategori" id="kategori" class="w-full p-2 border border-gray-300 rounded" required>
    </div>

    <div class="mb-4">
      <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar Barang</label>
      <input type="file" name="gambar" id="gambar" class="w-full p-2 border border-gray-300 rounded" required>
    </div>

    <div>
      <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Simpan Barang</button>
    </div>
  </form>
</div>
@endsection
