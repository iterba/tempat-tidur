<!doctype html>
<html lang="id" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <title>Informasi Tempat Tidur - {{ config('config.name', 'RS. Ernaldi Bahar') }}</title>

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="px-4 lg:px-20 antialiased h-full bg-gray-100 font-roboto">
    <header class="py-10 lg:w-6/12 lg:mb-10">
        <h1 class="text-lg md:text-4xl font-medium mb-5 leading-tight">Informasi Ketersediaan Kapasitas Tempat Tidur
            Rawat Inap
            RS Ernaldi Bahar
        </h1>

        <div class="text-sm lg:text-md font-medium tracking-wider text-gray-500 divide-x-2 divide-gray-500">
            <span class="pr-3">Tanggal : <span class="font-black text-gray-900">
                    {{ now()->format('d M Y') }}
                </span></span>
            <span class="pl-5">Pukul : <span class="font-black text-gray-900">
                    {{ now()->format('H:i:s') }}
                </span></span>
        </div>

        <img src="{{ asset('assets/logo/logo.png') }}" alt="Ernaldi Bahar"
            class="absolute -top-20 right-40 opacity-30 -z-10 rotate-12" width="350">
    </header>

    <main class="w-full">
        <div class="grid lg:grid-cols-4 lg:gap-12 mb-10 lg:mb-28">
            {{-- ASOKA --}}
            <x-card title="ASOKA" :kelas1="$asoka1" :kelas2="$asoka2" :kelas3="$asoka3" :vip="$asokavip"
                class="bg-gradient-to-br from-[#900560] via-[#C03059] to-[#F8904A] text-white" :kapasitas="$asoka1->jumlah_bed + $asoka2->jumlah_bed + $asoka3->jumlah_bed + $asokavip->jumlah_bed"
                :terpakai="$asoka1->digunakan + $asoka2->digunakan + $asoka3->digunakan + $asokavip->digunakan" />

            {{-- BANGAU --}}
            <x-card title="BANGAU" :kelas3="$bangau3" :kapasitas="$bangau3->jumlah_bed" :terpakai="$bangau3->digunakan"
                class="bg-gradient-to-tr from-[#F0C27B] to-[#4B1248] text-white" />

            {{-- CAMAR --}}
            <x-card title="CAMAR" :kelas3="$camar3" :kapasitas="$camar3->jumlah_bed" :terpakai="$camar3->digunakan"
                class="text-white bg-gradient-to-br from-[#FEAC5E] via-[#C779D0] to-[#4BC0C8]" />

            {{-- CEMPAKA --}}
            <x-card title="CEMPAKA" :kelas1="$cempaka1" :kelas2="$cempaka2" :kelas3="$cempaka3" :vip="$cempakavip"
                :kapasitas="$cempaka1->jumlah_bed +
                    $cempaka2->jumlah_bed +
                    $cempaka3->jumlah_bed +
                    $cempakavip->jumlah_bed" :terpakai="$cempaka1->digunakan + $cempaka2->digunakan + $cempaka3->digunakan + $cempakavip->digunakan"
                class="bg-gradient-to-br from-[#0a9f46] to-[#0575E6] text-white" />

            {{-- CENDRAWASIH --}}
            <x-card title="CENDRAWASIH" :kelas1="$cendrawasih1" :kelas2="$cendrawasih2" :kelas3="$cendrawasih3" :vip="$cendrawasihvip"
                :kapasitas="$cendrawasih1->jumlah_bed +
                    $cendrawasih2->jumlah_bed +
                    $cendrawasih3->jumlah_bed +
                    $cendrawasihvip->jumlah_bed" :terpakai="$cendrawasih1->digunakan +
                    $cendrawasih2->digunakan +
                    $cendrawasih3->digunakan +
                    $cendrawasihvip->digunakan"
                class="bg-gradient-to-tr from-[#4e54c8] to-[#8f94fb] text-white" />

            {{-- KENANGA --}}
            <x-card title="KENANGA" :kelas3="$kenanga3" :kapasitas="$kenanga3->jumlah_bed" :terpakai="$kenanga3->digunakan"
                class="bg-gradient-to-tl from-[#d88a03] to-[#51c471] text-white" />

            {{-- MERAK --}}
            <x-card title="MERAK" :kelas3="$merak3" :kapasitas="$merak3->jumlah_bed" :terpakai="$merak3->digunakan"
                class="bg-gradient-to-br from-[#43C6AC] to-[#191654] text-white" />

            {{-- MERPATI --}}
            <x-card title="MERPATI" :kelas3="$merpati3" :kapasitas="$merpati3->jumlah_bed" :terpakai="$merpati3->digunakan"
                class="bg-gradient-to-tl from-[#3CA55C] to-[#B5AC49] text-white" />
        </div>

        <div class="flex justify-between items-center">
            <a href="{{ route('detail') }}" class="font-medium border p-4 rounded bg-sky-500 text-white shadow-md">Bed
                Detail</a>
            <div
                class="flex justify-between lg:justify-end text-xs lg:text-xl lg:divide-x-2 divide-gray-500 tracking-widest">
                <p class="lg:pr-5 mb-10 lg:mb-0">
                    Kapasitas Tempat Tidur <span
                        class="font-medium border p-4 rounded shadow-md bg-gray-500 text-white">{{ $totalBed }}</span>
                </p>
                <p class="lg:pl-5 lg:pr-5">
                    Total Terpakai <span
                        class="font-medium border p-4 rounded bg-orange-400 text-white shadow-md">{{ $totalTerpakai }}</span>
                </p>
                <p class="lg:pl-5">
                    Total Tersedia <span
                        class="font-medium border p-4 rounded bg-green-600 text-white shadow-md">{{ $totalTersedia }}</span>
                </p>
            </div>
        </div>
    </main>
</body>

</html>
