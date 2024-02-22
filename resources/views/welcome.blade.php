@extends('layouts.layout')

@section('content')
    <div>
        <div class="text-center pt-5 space-y-2">
            <p class="text-4xl font-bold">Welcome to Steradian</p>
            <p class="text-lg md:px-40 py-5">Founded in 2016, Steradian Data Optima focus in deliver data-driven digital transformation to any size of organizations. Using proven technologies, platform and experienced engineer, we keep pursuing our purpose to make Artificial Intelligence accessible for everyone, either a big company looking for innovation or small business looking for exceptional growth, so they take a competitive advantage.</p>
            <p class="text-lg">Please go to the cars and orders dashboard page</p>
            <a href="/cars" class="pl-1 pt-1 text-4xl"><i class="fas fa-chevron-circle-down cursor-pointer text-blue-500 hover:text-blue-600"></i></a>
            <a href="/orders" class="pl-1 pt-1 text-4xl"><i class="fas fa-chevron-circle-down cursor-pointer text-red-500 hover:text-red-600"></i></a>
        </div>
    </div>
@endsection