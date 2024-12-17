@extends('template.index')

<div class="max-w-lg mx-auto mt-10 p-6 bg-gray-200 rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Form Login</h2>
    <form action="/login" method="POST">
        @csrf
        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
            <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan email">
        </div>
        <div class="mb-4">
            <label for="password" class="block text-gray-700 font-medium mb-2">Kata Sandi</label>
            <input type="password" id="password" name="password" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan kata sandi">
        </div>
        <div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Login
            </button>
        </div>
        <div class="mt-4 text-center">
            <p class="text-gray-700">Belum memiliki akun? <a href="/register" class="text-blue-500 hover:text-blue-600">Daftar di sini</a></p>
        </div>
    </form>
</div>
