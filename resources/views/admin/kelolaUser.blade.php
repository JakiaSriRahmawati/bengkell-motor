<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kelola User</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <div class="flex h-screen">
    <div class="w-64 bg-gray-800 text-white">
      <div class="p-4 font-bold text-2xl text-center border-b border-gray-700">Admin Dashboard</div>
      <nav class="mt-6">
        <a href="homeAdmin" class="block px-4 py-2 hover:bg-gray-700">Dashboard</a>
        <a href="index" class="block px-4 py-2 hover:bg-gray-700">Home</a>
        <a href="#" class="block px-4 py-2 hover:bg-gray-700">Kelola User</a>
        <a href="kelolaKasir" class="block px-4 py-2 hover:bg-gray-700">Kelola Kasir</a>
        <a href="kelolaMekanik" class="block px-4 py-2 hover:bg-gray-700">Kelola Mekanik</a>
        <a href="barang" class="block px-4 py-2 hover:bg-gray-700">Kelola Barang</a>
        <a href="kelolaBooking" class="block px-4 py-2 hover:bg-gray-700">Kelola Booking</a>
        <a href="laporan" class="block px-4 py-2 hover:bg-gray-700">Laporan Owner</a>
      </nav>
    </div>

    <div class="flex-1 p-6">
      <h1 class="text-3xl font-semibold mb-6">Kelola User</h1>
      <div class="bg-white p-4 rounded shadow">
        <table class="w-full">
          <thead>
            <tr class="bg-gray-200">
                <th class="p-2 text-left">ID</th>
                <th class="p-2 text-left">Nama</th>
                <th class="p-2 text-left">Email</th>
                <th class="p-2 text-left">No Handphone</th>
                <th class="p-2 text-left">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
            <tr>
                <td class="p-2">{{ $user->id }}</td>
                <td class="p-2">{{ $user->name }}</td>
                <td class="p-2">{{ $user->email }}</td>
                <td class="p-2">{{ $user->no_hp }}</td>
                <td class="p-2">
                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure?')">
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
