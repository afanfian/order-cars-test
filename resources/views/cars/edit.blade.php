@extends('layouts.layout')

@section('content')
<div class="flex items-center justify-center h-screen">
    <form action="/cars/{{ $cars->id }}" method="POST" class="w-4/12 bg-white shadow-md rounded-lg p-8">
        @method('PUT')
        @csrf
        <p class="text-center text-xl font-bold pb-5">Edit Data Karyawan</p>
        <div class="mb-4">
            <label for="car_name" class="block text-gray-700 font-bold mb-2">Nama Mobil:</label>
            <input type="text" name="car_name" id="car_name" placeholder="Fian" value="{{ $cars->car_name }}" class="px-4 py-2 border rounded-lg w-full focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="day_rate" class="block text-gray-700 font-bold mb-2">Rating Perhari:</label>
            <input type="text" name="day_rate" id="day_rate" pattern="[0-9]+([\.,][0-9]+)?" placeholder="211.90" value="{{ $cars->day_rate }}" class="px-4 py-2 border rounded-lg w-full focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="month_rate" class="block text-gray-700 font-bold mb-2">Rating Perbulan:</label>
            <input type="text" name="month_rate" id="month_rate" pattern="[0-9]+([\.,][0-9]+)?" placeholder="11.92" value="{{ $cars->month_rate }}" class="px-4 py-2 border rounded-lg w-full focus:outline-none focus:border-blue-500">
        </div>
        <div class="mb-4">
            <label for="image" class="block text-gray-700 font-bold mb-2">Kota Asal:</label>
            <input type="text" name="image" id="image" placeholder="Surabaya" value="{{ $cars->image }}" class="px-4 py-2 border rounded-lg w-full focus:outline-none focus:border-blue-500">
        </div>
        <button type="submit" name="submit" class="px-4 py-2 rounded-lg text-white bg-blue-500 hover:bg-blue-600 focus:outline-none">
            Simpan
        </button>
    </form>
</div>
@endsection
