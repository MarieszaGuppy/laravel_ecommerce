@extends('layouts.main')

@section('container')
    <div class="container max-w-screen-lg mx-auto">
        <h1 class="font-bold text-3x lg:text-5xl">Menu</h1>
        <h3 class="text-md mb-4 text-text pt-4 lg:text-xl">
            Cicipi kelezatan makanan dan minuman yang dibuat oleh a little
            <span class="text-primary font-semibold text-xl">cinta!!</span>
        </h3>

        <!-- Grid dengan 2 kolom pada layar lebih besar -->
        <div class="grid grid-cols-1 gap-6 pt-10 sm:grid-cols-2 lg:grid-cols-2"> <!-- Di sini hanya 2 kolom -->
            <div class="p-4"> <!-- Menambahkan padding -->
                <a href="#" class="shadow-lg rounded-md block hover:shadow-xl transition duration-300">
                    <div class="w-full h-64 overflow-hidden rounded-md"> <!-- Mengurangi tinggi gambar -->
                        <img src="" alt="gambar" class="w-full h-full object-cover">
                    </div>
                    <h1 class="text-center pt-3 font-bold">nama</h1>
                    <h1 class="text-center pt-1 pb-6 text-text font-bold">Rp.</h1>
                </a>
                <div class="flex justify-center pt-6 mb-10">
                    <a href="#"
                        class="m-auto text-base font-semibold text-white bg-primary py-3 px-24 rounded-xl hover:bg-gray-950
                                transition duration-700 ease-in-out">order
                        sekarang</a>
                </div>
            </div>
            <div class="p-4"> <!-- Menambahkan padding -->
                <a href="#" class="shadow-lg rounded-md block hover:shadow-xl transition duration-300">
                    <div class="w-full h-64 overflow-hidden rounded-md"> <!-- Mengurangi tinggi gambar -->
                        <img src="" alt="gambar" class="w-full h-full object-cover">
                    </div>
                    <h1 class="text-center pt-3 font-bold">nama</h1>
                    <h1 class="text-center pt-1 pb-6 text-text font-bold">Rp.</h1>
                </a>
                <div class="flex justify-center pt-6 mb-10">
                    <a href="#"
                        class="m-auto text-base font-semibold text-white bg-primary py-3 px-24 rounded-xl hover:bg-gray-950
                                transition duration-700 ease-in-out">order
                        sekarang</a>
                </div>
            </div>
            <div class="p-4"> <!-- Menambahkan padding -->
                <a href="#" class="shadow-lg rounded-md block hover:shadow-xl transition duration-300">
                    <div class="w-full h-64 overflow-hidden rounded-md"> <!-- Mengurangi tinggi gambar -->
                        <img src="" alt="gambar" class="w-full h-full object-cover">
                    </div>
                    <h1 class="text-center pt-3 font-bold">nama</h1>
                    <h1 class="text-center pt-1 pb-6 text-text font-bold">Rp.</h1>
                </a>
                <div class="flex justify-center pt-6 mb-10">
                    <a href="#"
                        class="m-auto text-base font-semibold text-white bg-primary py-3 px-24 rounded-xl hover:bg-gray-950
                                transition duration-700 ease-in-out">order
                        sekarang</a>
                </div>
            </div>
            <div class="p-4"> <!-- Menambahkan padding -->
                <a href="#" class="shadow-lg rounded-md block hover:shadow-xl transition duration-300">
                    <div class="w-full h-64 overflow-hidden rounded-md"> <!-- Mengurangi tinggi gambar -->
                        <img src="" alt="gambar" class="w-full h-full object-cover">
                    </div>
                    <h1 class="text-center pt-3 font-bold">nama</h1>
                    <h1 class="text-center pt-1 pb-6 text-text font-bold">Rp.</h1>
                </a>
                <div class="flex justify-center pt-6 mb-10">
                    <a href="#"
                        class="m-auto text-base font-semibold text-white bg-primary py-3 px-24 rounded-xl hover:bg-gray-950
                                transition duration-700 ease-in-out">order
                        sekarang</a>
                </div>
            </div>
        </div>
    </div>
@endsection
