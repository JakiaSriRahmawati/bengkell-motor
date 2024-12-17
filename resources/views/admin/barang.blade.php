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
      <div class="p-4 font-bold text-2xl text-center border-b border-gray-700">Admin Dashboard</div>
      <nav class="mt-6">
        <a href="homeAdmin" class="block px-4 py-2 hover:bg-gray-700">Dashboard</a>
        <a href="kelolaUser" class="block px-4 py-2 hover:bg-gray-700">Kelola User</a>
        <a href="kelolaKasir" class="block px-4 py-2 hover:bg-gray-700">Kelola Kasir</a>
        <a href="kelolaMekanik" class="block px-4 py-2 hover:bg-gray-700">Kelola Mekanik</a>
        <a href="kelolaBarang" class="block px-4 py-2 hover:bg-gray-700">Kelola Barang</a>
        <a href="kelolaBooking" class="block px-4 py-2 hover:bg-gray-700">Kelola Booking</a>
        <a href="laporan" class="block px-4 py-2 hover:bg-gray-700">Laporan Owner</a>
      </nav>
    </div>

    <div class="flex-1 p-6">
      <h1 class="text-3xl font-semibold mb-6">Kelola Barang</h1>
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

                <tr>
                <td class="p-2 border">1</td>
                <td class="p-2 border">
                  <img 
                    src="{{ Storage::url('images/barang/oli.png') }}" 
                    class="w-20 h-20 object-cover rounded" 
                    alt="Oli Mesin"
                  />
                </td>
                <td class="p-2 border">Oli Mesin</td>
                <td class="p-2 border">Oli kualitas tinggi untuk mesin motor</td>
                <td class="p-2 border">Rp. 80.000</td>
                <td class="p-2 border">5</td>
                <td class="p-2 border">
                  <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 transition">
                    Edit
                  </button>
                  <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition">
                    Hapus
                  </button>
                </td>
              </tr>

              <tr>
                <td class="p-2 border">2</td>
                <td class="p-2 border">
                  <img 
                    src="{{ Storage::url('images/barang/ban.png') }}" 
                    class="w-20 h-20 object-cover rounded" 
                    alt="Ban Motor"/>
                </td>
                <td class="p-2 border">Ban Motor</td>
                <td class="p-2 border">Ban motor tubeless untuk segala jenis medan</td>
                <td class="p-2 border">Rp. 350.000</td>
                <td class="p-2 border">5</td>
                <td class="p-2 border">
                  <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 transition">
                    Edit
                  </button>
                  <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition">
                    Hapus
                  </button>
                </td>
              </tr>

              <tr>
                <td class="p-2 border">3</td>
                <td class="p-2 border">
                  <img 
                    src="{{ Storage::url('images/barang/aki.png') }}" 
                    class="w-20 h-20 object-cover rounded" 
                    alt="Aki Motor"
                  />
                </td>
                <td class="p-2 border">Aki Motor</td>
                <td class="p-2 border">Aki berkualitas untuk motor matic</td>
                <td class="p-2 border">Rp. 250.000</td>
                <td class="p-2 border">5</td>
                <td class="p-2 border">
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
