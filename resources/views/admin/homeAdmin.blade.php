<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <div class="flex h-screen">
    <div class="w-64 bg-gray-800 text-white">
      <div class="p-4 text-center font-bold text-2xl border-b border-gray-700">Admin Dashboard</div>
      <nav class="mt-6">
        <a href="#" class="block px-4 py-2 hover:bg-gray-700">Dashboard</a>
        <a href="index" class="block px-4 py-2 hover:bg-gray-700">Home</a>
        <a href="profile" class="block px-4 py-2 hover:bg-gray-700">Profile</a>
        <a href="kelolaUser" class="block px-4 py-2 hover:bg-gray-700">Kelola User</a>
        <a href="kelolaKasir" class="block px-4 py-2 hover:bg-gray-700">Kelola Kasir</a>
        <a href="kelolaMekanik" class="block px-4 py-2 hover:bg-gray-700">Kelola Mekanik</a>
        <a href="barang" class="block px-4 py-2 hover:bg-gray-700">Kelola Barang</a>
        <a href="kelolaBooking" class="block px-4 py-2 hover:bg-gray-700">Kelola Booking</a>
        <a href="laporan" class="block px-4 py-2 hover:bg-gray-700">Laporan Owner</a>
      </nav>
    </div>

    <div class="flex-1 p-6">
      <h1 class="text-3xl font-semibold mb-6">Dashboard</h1>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow">
          <h2 class="text-xl font-bold mb-2">Jumlah Client</h2>
          <p class="text-gray-700 text-2xl">120</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
          <h2 class="text-xl font-bold mb-2">Jumlah User</h2>
          <p class="text-gray-700 text-2xl">50</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
          <h2 class="text-xl font-bold mb-2">Jumlah Kasir</h2>
          <p class="text-gray-700 text-2xl">30</p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
