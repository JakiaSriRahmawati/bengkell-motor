<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kelola Barang</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <div class="flex h-screen">
    <div class="w-64 bg-gray-800 text-white">
      <h2 class="p-4 text-center font-bold text-2xl border-b border-gray-700">@lang('dash.header')</h2>
      <nav class="mt-6">
        <a href="#" class="block px-4 py-2 hover:bg-gray-700">@lang('dash.biodata.dashboard')</a>
        <a href="index" class="block px-4 py-2 hover:bg-gray-700">@lang('dash.biodata.index')</a>
        <a href="profile" class="block px-4 py-2 hover:bg-gray-700">@lang('dash.biodata.profile')</a>
        <a href="kelolaUser" class="block px-4 py-2 hover:bg-gray-700">@lang('dash.biodata.kelolaUser')</a>
        <a href="kelolaKasir" class="block px-4 py-2 hover:bg-gray-700">@lang('dash.biodata.kelolaKasir')</a>
        <a href="kelolaMekanik" class="block px-4 py-2 hover:bg-gray-700">@lang('dash.biodata.kelolaMekanik')</a>
        <a href="barang" class="block px-4 py-2 hover:bg-gray-700">@lang('dash.biodata.barang')</a>
        <a href="kelolaBooking" class="block px-4 py-2 hover:bg-gray-700">@lang('dash.biodata.kelolaBooking')</a>
        <a href="laporan" class="block px-4 py-2 hover:bg-gray-700">@lang('dash.biodata.laporan')</a>
      </nav>
    </div>

    <div class="flex-1 p-6">
      <h1 class="text-3xl font-semibold mb-6">Kelola Barang</h1>
      <a href="{{ route('admin.store') }}">
        <button class="bg-lime-500 text-white px-3 py-1 rounded hover:bg-lime-800-600 transition">
          Tambah Barang
        </button>
      </a>
      <div class="bg-white p-4 rounded shadow">
        <table class="w-full border">
            <thead>
              <tr class="bg-gray-200">
                <th class="p-2 text-left border">ID</th>
                <th class="p-2 text-left border">Gambar Barang</th>
                <th class="p-2 text-left border">Nama Barang</th>
                <th class="p-2 text-left border">Deskripsi</th>
                <th class="p-2 text-left border">Harga</th>
                <th class="p-2 text-left border">Stock</th>
                <th class="p-2 text-left border">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($barangs as $barang)
                <tr>
                  <td class="p-2 border">{{ $barang->id }}</td>
                  <td class="p-2 border">
                    <img 
                      src="{{ Storage::url('images/barang/' . $barang->gambar) }}" 
                      class="w-20 h-20 object-cover rounded" 
                      alt="{{ $barang->nama_barang }}"
                    />
                  </td>
                  <td class="p-2 border">{{ $barang->nama_barang }}</td>
                  <td class="p-2 border">{{ $barang->deskripsi }}</td>
                  <td class="p-2 border">Rp. {{ number_format($barang->harga, 0, ',', '.') }}</td>
                  <td class="p-2 border">{{ $barang->stok }}</td>
                  <td class="p-2 border">
                    <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 transition">
                      Edit
                    </button>
                    <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition">
                      Hapus
                    </button>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>     
      </div>
    </div>
  </div>
</body>
</html>
