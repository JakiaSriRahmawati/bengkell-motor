<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kelola Kasir</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <div class="flex h-screen">
    <div class="w-64 bg-gray-800 text-white">
      <div class="p-4 font-bold text-2xl text-center border-b border-gray-700">Admin Dashboard</div>
      <nav class="mt-6">
        <a href="homeAdmin" class="block px-4 py-2 hover:bg-gray-700">Dashboard</a>
        <a href="kelolaUser" class="block px-4 py-2 hover:bg-gray-700">Kelola User</a>
        <a href="#" class="block px-4 py-2 hover:bg-gray-700">Kelola Kasir</a>
        <a href="kelolaMekanik" class="block px-4 py-2 hover:bg-gray-700">Kelola Mekanik</a>
        <a href="barang" class="block px-4 py-2 hover:bg-gray-700">Kelola Barang</a>
        <a href="kelolaBooking" class="block px-4 py-2 hover:bg-gray-700">Kelola Booking</a>
        <a href="laporan" class="block px-4 py-2 hover:bg-gray-700">Laporan Owner</a>
      </nav>
    </div>

    <div class="flex-1 p-6">
      <h1 class="text-3xl font-semibold mb-6">Kelola Kasir</h1>
      <div class="bg-white p-4 rounded shadow">
        <table class="w-full">
            <thead>
              <tr class="bg-gray-200">
                <th class="p-2 text-left">ID</th>
                <th class="p-2 text-left">Image</th>
                <th class="p-2 text-left">Nama</th>
                <th class="p-2 text-left">Email</th>
                <th class="p-2 text-left">No Handpone</th>
                <th class="p-2 text-left">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="p-2">1</td>
                <td class="p-2">
                  <img 
                    src="{{ Storage::url('images/contac/galerri.png') }}" 
                    class="w-20 h-11 object-cover rounded" 
                    alt="User Image"
                  />
                </td>
                <td class="p-2">Jakia Sri</td>
                <td class="p-2">jakia@example.com</td>
                <td class="p-2">089887672367</td>
                <td class="p-2">
                  <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 transition">
                    Edit
                  </button>
                  <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition">
                    Hapus
                  </button>
                </td>
              </tr>
            </tbody>
          </table>     
      </div>
    </div>
  </div>
</body>
</html>
