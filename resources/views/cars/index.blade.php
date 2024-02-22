@extends('layouts.layout')

@section('content')
    <div class="pb-5">
        <div class="flex justify-center pt-5 gap-5">
            <div class="space-y-2">
                <p class="font-bold text-lg text-center">Table Cars</p>
                <button class="flex justify-end items-end text-right font-bold py-2 px-4 rounded bg-blue-500 hover:bg-blue-700 text-white">
                    <a href="/cars/create">Tambah User<i class="fas fa-plus pl-2"></i></a>
                </button>
                <table class="table-auto rounded-md">
                    <thead class="border bg-gray-300">
                    <tr class="border">
                        <th class="px-2 border text-center">No</th>
                        <th class="p-4 border">Nama Mobil</th>
                        <th class="p-4 border">Rating Per Hari</th>
                        <th class="p-4 border">Rating Per Bulan</th>
                        <th class="p-4 border">Gambar Mobil</th>
                        <th class="p-4 border">Aksi</th>
                    </tr>
                    </thead>
                    <tbody class="border bg-gray-50">
                    @php
                        $counter = 1;
                    @endphp
                    @foreach ($cars as $item)
                        <tr class="border">
                            <td class="px-2 text-center border">{{ $counter++ }}</td>
                            <td class="p-4 border">{{$item->car_name}}</td>
                            <td class="p-4 border">{{$item->day_rate}}</td>
                            <td class="p-4 border">{{$item->month_rate}}</td>
                            <td class="p-4 border">{{$item->image}}</td>
                            <td class="p-4 border">
                                <a href="/cars/{{ $item->id }}/edit" class="text-blue-500"><i class="fas fa-edit"></i></a>
                                <form action="/cars/{{ $item->id }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection