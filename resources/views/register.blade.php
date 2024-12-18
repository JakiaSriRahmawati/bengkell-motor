@extends('template.index')

<div class="max-w-lg mx-auto mt-10 p-6 bg-gray-100 rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Form Registrasi</h2>
    <form action="/register" method="POST" enctype="multipart/form-data">
        <div class="mb-4">
            <label for="full_name" class="block text-gray-700 font-medium mb-2">Nama Lengkap</label>
            <input type="text" id="full_name" name="full_name" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan nama lengkap">
        </div>
        <div class="mb-4">
            <label for="full_name" class="block text-gray-700 font-medium mb-2">Alamat</label>
            <input type="text" id="full_name" name="full_name" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan alamat">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
            <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan email">
        </div>
        <div class="mb-4">
            <label for="full_name" class="block text-gray-700 font-medium mb-2">No Handphone</label>
            <input type="number" id="full_name" name="full_name" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan no handphone">
        </div>
        <div class="mb-4">
            <label for="password" class="block text-gray-700 font-medium mb-2">Kata Sandi</label>
            <input type="password" id="password" name="password" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan kata sandi">
        </div>
        <div class="mb-4">
            <label for="retype_password" class="block text-gray-700 font-medium mb-2">Ulangi Kata Sandi</label>
            <input type="password" id="retype_password" name="retype_password" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Ulangi kata sandi">
        </div>
        <div class="mb-4">
            <label for="role" class="block text-gray-700 font-medium mb-2">Peran</label>
            <select id="role" name="role" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="" disabled selected>Pilih Peran</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
                <option value="owner">Owner</option>
                <option value="kasir">Kasir</option>
                <option value="mekanik">Mekanik</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="image" class="block text-gray-700 font-medium mb-2">Gambar Profil</label>
            <input type="file" id="image" name="image" accept="image/*" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Daftar
            </button>
        </div>
    </form>
</div>
