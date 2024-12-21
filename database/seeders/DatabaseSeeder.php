<?php

namespace Database\Seeders;

use App\Models\Artikel;
use App\Models\Barang;
use App\Models\Booking;
use App\Models\DetailTransaksi;
use App\Models\Rating;
use App\Models\Transaksi;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
    
    $defaultImagePath = 'storage/images/mekanik/pat.png';

    $placeholderPath = public_path('storage/images/mekanik/pat.png');

    // Validasi apakah file placeholder ada
    if (!file_exists($placeholderPath)) {
        throw new Exception('File "pat.png" tidak ditemukan di folder public/storage/images/mekanik.');
    }


        // User data
        $users = [
            [
                'full_name' => 'Jakia Sri Rahmawati',
                'email' => 'jakiasrirahmawati@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'Admin',
                'phone' => '080101010101',
                'address' => 'Jl.Kadudampit',
            ],
            [
                'full_name' => 'Jakia Sri',
                'email' => 'jakiasri@gmail.com',
                'password' => bcrypt('87654321'),
                'role' => 'Owner',
                'phone' => '080202020202',
                'address' => 'Jl.Cisaat',
            ],
            [
                'full_name' => 'Sri Rahmawati',
                'email' => 'srirahmawati@gmail.com',
                'password' => bcrypt('11111111'),
                'role' => 'Kasir',
                'phone' => '080303030303',
                'address' => 'Jl.SituGunung',
            ],
            [
                'full_name' => 'Jakia Rahmawati',
                'email' => 'jakiarahmawati@gmail.com',
                'password' => bcrypt('22222222'),
                'role' => 'Mekanik',
                'phone' => '080404040404',
                'address' => 'Jl.Cibadak',
            ],
            [
                'full_name' => 'Rahmawati Sri',
                'email' => 'rahmawatisri@gmail.com',
                'password' => bcrypt('33333333'),
                'role' => 'Pengguna',
                'phone' => '080505050505',
                'address' => 'Jl.Ahmad Yani',
            ],
        ];

        foreach ($users as $userData) {
            User::create(array_merge($userData, ['image' => $defaultImagePath]));
        }

        // Booking seeding
        Booking::create([
            'user_id' => 1,
            'merek_motor' => 'Honda',
            'mesin_motor' => '150cc',
            'seri_motor' => 'Vario',
            'no_plat' => 'F 4B4D UBD',
            'jenis_service' => 'Ganti Oli Mesin dan Oli Gardan',
            'tgl_service' => '2024-07-03',
            'status_orderan' => 'diterima',
            'deskripsi' => 'mau ganti oli dengan oli yang berkualitas',
        ]);

        // Rating seeding
        Rating::create([
            'user_id' => 1,
            'rating' => '9/10',
            'deskripsi' => 'Pelayanan yang sangat cepat dan sempurna',
        ]);

        // Artikel seeding
        Artikel::create([
            'user_id' => 1,
            'gambar' => 'img/motor.jpg',
            'judul' => 'Cara Merawat Motor dengan Baik dan Benar',
            'berita' => 'Yaitu dengan datang ke bengkel kami.',
        ]);

        // Barang seeding
        Barang::create([
            'booking_id' => 1,
            'nama_barang' => 'Oli Mesin Yamaha Blue',
            'harga_barang' => 50000,
            'stok' => 100,
            'deskripsi' => 'Oli berkualitas tinggi untuk perawatan mesin.',
        ]);

        // Transaksi seeding
        Transaksi::create([
            'user_id' => 1,
            'booking_id' => 1,
            'tgl_transaksi' => Carbon::now()->subDays(10),
            'keterangan' => 'Service Oli Mesin dan Gardan',
            'pemasukan' => 100000,
            'pengeluaran' => 0,
        ]);

        // Detail Transaksi seeding
        DetailTransaksi::create([
            'booking_id' => 1,
            'user_id' => 2,
            'barang_id' => 1,
            'transaksi_id' => 1,
            'jumlah' => 1,
            'biaya_penanganan' => 20000,
            'subtotal' => 70000,
        ]);
    }
}
