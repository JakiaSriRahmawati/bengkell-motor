<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Booking</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <div class="w-64 bg-gray-800 text-white">
            <div class="p-6 text-center font-bold text-2xl border-b border-gray-700">Admin Dashboard</div>
            <nav class="mt-6">
                <a href="#" class="block px-4 py-2 hover:bg-gray-700">Dashboard</a>
                <a href="index" class="block px-4 py-2 hover:bg-gray-700">Home</a>
                <a href="kelolaUser" class="block px-4 py-2 hover:bg-gray-700">Kelola User</a>
                <a href="kelolaKasir" class="block px-4 py-2 hover:bg-gray-700">Kelola Kasir</a>
                <a href="kelolaMekanik" class="block px-4 py-2 hover:bg-gray-700">Kelola Mekanik</a>
                <a href="barang" class="block px-4 py-2 hover:bg-gray-700">Kelola Barang</a>
                <a href="kelolaBooking" class="block px-4 py-2 hover:bg-gray-700">Kelola Booking</a>
                <a href="laporan" class="block px-4 py-2 hover:bg-gray-700">Laporan Owner</a>
            </nav>
        </div>
        <div class="flex-1 container mx-auto mt-10 p-6 bg-white rounded-lg shadow-lg">
            <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Daftar Booking Service</h1>
            <table class="w-full border-collapse border border-gray-300 text-center table-auto">
                <thead>
                    <tr class="bg-gray-200 text-gray-700">
                        <th class="p-3 border border-gray-300">No</th>
                        <th class="p-3 border border-gray-300">Nama Lengkap</th>
                        <th class="p-3 border border-gray-300">Email</th>
                        <th class="p-3 border border-gray-300">Nomor Telepon</th>
                        <th class="p-3 border border-gray-300">Jenis Layanan</th>
                        <th class="p-3 border border-gray-300">Tanggal Service</th>
                        <th class="p-3 border border-gray-300">Catatan Tambahan</th>
                        <th class="p-3 border border-gray-300">Tanggal Booking</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($bookings && $bookings->isNotEmpty())
                        @foreach ($bookings as $index => $booking)
                        <tr class="hover:bg-gray-100">
                            <td class="p-3 border border-gray-300">{{ $index + 1 }}</td>
                            <td class="p-3 border border-gray-300">{{ $booking->nama_lengkap }}</td>
                            <td class="p-3 border border-gray-300">{{ $booking->email }}</td>
                            <td class="p-3 border border-gray-300">{{ $booking->nomor_telepon }}</td>
                            <td class="p-3 border border-gray-300">
                                @php
                                    $services = json_decode($booking->jenis_layanan);
                                @endphp
                                @if ($services && is_array($services))
                                    @foreach ($services as $service)
                                        <span class="inline-block px-2 py-1 bg-blue-100 text-blue-700 rounded m-1">{{ $service }}</span>
                                    @endforeach
                                @else
                                    <span class="text-red-500">Invalid data</span>
                                @endif
                            </td>
                            <td class="p-3 border border-gray-300">{{ \Carbon\Carbon::parse($booking->tanggal_service)->format('d M Y') }}</td>
                            <td class="p-3 border border-gray-300">{{ $booking->catatan_tambahan ?? '-' }}</td>
                            <td class="p-3 border border-gray-300">{{ $booking->created_at->format('d M Y H:i') }}</td>
                        </tr>
                        @endforeach
                    @else
                    <tr>
                        <td colspan="8" class="p-4 text-center text-gray-600">Tidak ada data booking.</td>
                    </tr>
                    @endif
                </tbody>
                
            </table>
        </div>

    </div>

</body>
</html>
