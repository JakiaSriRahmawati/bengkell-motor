@extends('template.index')

<div class="bg-gradient-to-r from-red-950 via-red-750 to-red-600 w-full h-auto flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-xl w-full max-w-3xl text-center my-28">
        <div class="flex flex-col gap-5">
            <h3 class="font-bold text-5xl text-red-950">Bebas Antrian Lama</h3>
            <span class="font-semibold text-3xl text-red-950">Kami menyadari waktu anda begitu berharga</span>
            <p class="font-normal text-xl text-gray-700">Nikmati layanan booking service online untuk kemudahan dan ketepatan waktu service mobil anda.</p>
            <span class="font-extrabold text-3xl text-transparent bg-clip-text bg-gradient-to-r from-red-700 via-yellow-600 to-red-800 drop-shadow-lg">
                YUU BOOKING SEKARANG !!
            </span>
        </div>
    </div>
</div>

<div class="min-h-screen flex items-center justify-center p-8">
    <div class="bg-gradient-to-r from-red-600 via-yellow-700 to-red-600 shadow-2xl rounded-xl p-10 w-full max-w-2xl">
        <h2 class="text-4xl font-bold text-red-950 text-center mb-8">Form Booking Service</h2>

        <form action="{{ route('booking.store')}}" method="POST" class="space-y-8">
            @csrf
            <div class="flex flex-col">
                <label for="full_name" class="text-lg font-medium">Nama Lengkap</label>
                <input type="text" id="full_name" name="full_name" placeholder="Masukkan nama lengkap Anda"
                    class="mt-2 px-5 py-3 rounded-lg border-2 border-gray-200 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent transition-all duration-200">
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
            <div class="flex flex-col gap-4">
                <label for="service" class="text-lg font-medium">Jenis Layanan</label>
                <div class="grid grid-cols-2 gap-3">
                    <label class="flex items-center gap-3">
                        <input type="checkbox" name="service[]" value="tune-up"
                            class="w-6 h-6 rounded border-gray-300 text-red-500 focus:ring-red-500">
                        <span class="text-gray-950 text-lg">Tune Up</span>
                    </label>
                    <label class="flex items-center gap-3">
                        <input type="checkbox" name="service[]" value="ganti-oli"
                            class="w-6 h-6 rounded border-gray-300 text-red-500 focus:ring-red-500">
                        <span class="text-gray-950 text-lg">Ganti Oli</span>
                    </label>
                    <label class="flex items-center gap-3">
                        <input type="checkbox" name="service[]" value="rem"
                            class="w-6 h-6 rounded border-gray-300 text-red-500 focus:ring-red-500">
                        <span class="text-gray-950 text-lg">Rem</span>
                    </label>
                    <label class="flex items-center gap-3">
                        <input type="checkbox" name="service[]" value="kelistrikan"
                            class="w-6 h-6 rounded border-gray-300 text-red-500 focus:ring-red-500">
                        <span class="text-gray-950 text-lg">Kelistrikan</span>
                    </label>
                    <label class="flex items-center gap-3">
                        <input type="checkbox" name="service[]" value="ban"
                            class="w-6 h-6 rounded border-gray-300 text-red-500 focus:ring-red-500">
                        <span class="text-gray-950 text-lg">Ban</span>
                    </label>
                    <label class="flex items-center gap-3">
                        <input type="checkbox" name="service[]" value="vleg"
                            class="w-6 h-6 rounded border-gray-300 text-red-500 focus:ring-red-500">
                        <span class="text-gray-950 text-lg">Vleg</span>
                    </label>
                    <label class="flex items-center gap-3">
                        <input type="checkbox" name="service[]" value="transmisi"
                            class="w-6 h-6 rounded border-gray-300 text-red-500 focus:ring-red-500">
                        <span class="text-gray-950 text-lg">Transmisi</span>
                    </label>
                    <label class="flex items-center gap-3">
                        <input type="checkbox" name="service[]" value="mesin"
                            class="w-6 h-6 rounded border-gray-300 text-red-500 focus:ring-red-500">
                        <span class="text-gray-950 text-lg">Mesin</span>
                    </label>
                </div>
            </div>            
            <div class="flex flex-col">
                <label for="date" class="text-lg font-medium">Tanggal Service</label>
                <input type="date" id="date" name="date"
                    class="mt-2 px-5 py-3 rounded-lg border-2 border-gray-200 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent transition-all duration-200">
            </div>
            <div class="flex flex-col">
                <label for="notes" class="text-lg font-medium">Catatan Tambahan</label>
                <textarea id="notes" name="notes" rows="4" placeholder="Masukkan catatan tambahan"
                    class="mt-2 px-5 py-3 rounded-lg border-2 border-gray-200 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent transition-all duration-200"></textarea>
            </div>
            <div class="text-center">
                <button type="submit"
                    class="w-full px-6 py-4 bg-red-950 text-white font-bold text-xl rounded-lg shadow-lg hover:bg-red-700 focus:ring-2 focus:ring-red-500 transition-all duration-300">
                    Booking Sekarang
                </button>
            </div>
        </form>
    </div>
</div>






