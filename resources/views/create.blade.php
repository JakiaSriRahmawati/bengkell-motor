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
      <h1 class="text-3xl font-semibold mb-6">TAMBAH User</h1>
      <div class="bg-white p-4 rounded shadow">
        <form action="{{ route('user.store')}}" method="POST" class="space-y-8">
            @csrf
            @method('PUT')
            <div class="flex flex-col">
                <label for="full_name" class="text-lg font-medium">Nama Lengkap</label>
                <input type="text" id="full_name" name="full_name" placeholder="Masukkan nama lengkap Anda"
                    class="mt-2 px-5 py-3 rounded-lg border-2 border-gray-200 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent transition-all duration-200">
                @error('email')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="flex flex-col">
                <label for="email" class="text-lg font-medium">Email</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email Anda"
                    class="mt-2 px-5 py-3 rounded-lg border-2 border-gray-200 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent transition-all duration-200">
            </div>
            <div class="flex flex-col">
                <label for="phone" class="text-lg font-medium">Nomor Telepon</label>
                <input type="tel" id="phone" name="phone" placeholder="Masukkan nomor telepon Anda"
                    class="mt-2 px-5 py-3 rounded-lg border-2 border-gray-200 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent transition-all duration-200">
            </div>           
            <div class="flex flex-col">
                <label for="text" class="text-lg font-medium">Alamat</label>
                <input type="text" id="date" name="text"
                    class="mt-2 px-5 py-3 rounded-lg border-2 border-gray-200 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent transition-all duration-200">
            </div>
                <button type="submit"
                    class="w-full px-6 py-4 bg-red-950 text-white font-bold text-xl rounded-lg shadow-lg hover:bg-red-700 focus:ring-2 focus:ring-red-500 transition-all duration-300">
                    tambah
                </button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
