<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kelola Mekanik</title>
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
      <h1 class="text-3xl font-semibold mb-6">Kelola Mekanik</h1>
      <a href="{{ route('admin.store') }}">
        <button class="bg-lime-500 text-white px-3 py-1 rounded hover:bg-lime-800-600 transition">
          Tambah Mekanik
        </button>
      </a>
      <div class="bg-white p-4 rounded shadow">
        <table class="w-full">
          <thead>
            <tr class="bg-gray-200">
                <th class="p-2 text-left">ID</th>
                <th class="p-2 text-left">Image</th>
                <th class="p-2 text-left">Nama</th>
                <th class="p-2 text-left">Email</th>
                <th class="p-2 text-left">No Handphone</th>
                <th class="p-2 text-left">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($mekaniks as $mekanik)
            <tr>
                <td class="p-2">{{ $mekanik->id }}</td>
                <td class="p-2">
                    <img src="{{ Storage::url('images/contac/' . $mekanik->image) }}" class="w-20 h-11 object-cover rounded" alt="User Image" />
                </td>
                <td class="p-2">{{ $mekanik->nama }}</td>
                <td class="p-2">{{ $mekanik->email }}</td>
                <td class="p-2">{{ $mekanik->no_hp }}</td>
                <td class="p-2">
                    <form action="{{ route('mekanik.destroy', $mekanik->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition">
                            Hapus
                        </button>
                    </form>
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
