@extends('layouts.layout')

@section('content')
<div class="flex items-center justify-center h-screen">
    <form action="/orders/store" method="POST" class="w-4/12 bg-white shadow-md rounded-lg p-8">
        @csrf
        <p class="text-center text-xl font-bold pb-5">Tambah Data Mobil Baru</p>
        <div class="mb-4">
            <label for="car_id" class="block text-gray-700 font-bold mb-2">Nama Mobil:</label>
            <select id="name" name="car_id" class="w-full px-2 py-2 border rounded-lg" required>
                <option value="">Pilih Nama</option>
                @foreach($cars as $item)
                    <option value="{{ $item->id }}">{{ $item->car_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="order_date" class="block text-gray-700 font-bold mb-2">Tanggal Order:</label>
            <input type="text" name="order_date" id="order_date" value="{{ date('Y-m-d') }}" class="px-4 py-2 border rounded-lg w-full focus:outline-none focus:border-blue-500" required>
        </div>
        <div class="mb-4">
            <label for="pickup_date" class="block text-gray-700 font-bold mb-2">Tanggal Penjemputan:</label>
            <input type="text" name="pickup_date" id="pickup_date" value="{{ date('Y-m-d') }}"  class="px-4 py-2 border rounded-lg w-full focus:outline-none focus:border-blue-500" required>
        </div>
        <div class="mb-4">
            <label for="dropoff_date" class="block text-gray-700 font-bold mb-2">Tanggal Penurunan:</label>
            <input type="text" name="dropoff_date" id="dropoff_date" value="{{ date('Y-m-d') }}" class="px-4 py-2 border rounded-lg w-full focus:outline-none focus:border-blue-500" required>
        </div>
        <div class="mb-4">
            <label for="pickup_location" class="block text-gray-700 font-bold mb-2">Lokasi Penjemputan:</label>
            <input type="text" name="pickup_location" id="pickup_location" placeholder="Surabaya" class="px-4 py-2 border rounded-lg w-full focus:outline-none focus:border-blue-500" required>
        </div>
        <div class="mb-4">
            <label for="dropoff_location" class="block text-gray-700 font-bold mb-2">Lokasi Penurunan:</label>
            <input type="text" name="dropoff_location" id="dropoff_location" placeholder="Bali" class="px-4 py-2 border rounded-lg w-full focus:outline-none focus:border-blue-500" required>
        </div>
        <button type="submit" name="submit" class="px-4 py-2 rounded-lg text-white bg-blue-500 hover:bg-blue-600 focus:outline-none">
            Simpan
        </button>
    </form>
</div>
@endsection
