<!doctype html>
<html lang="id" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Informasi Tempat Tidur - {{ config('config.name', 'RS. Ernaldi Bahar') }}</title>

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Roboto:wght@400;500;700;900&family=Inter:wght@400;500;700;900&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="px-20 antialiased h-full bg-gray-100 font-inter">
    <header class="py-5 w-6/12 mb-10">
        <h1 class="text-4xl font-medium mb-5 leading-tight">Informasi Ketersediaan Kapasitas Tempat Tidur Rawat Inap
            RS Ernaldi Bahar
        </h1>

        <div class="font-medium tracking-wider divide-x-2 divide-gray-500">
            <span class="pr-3">Tanggal : <span class="font-black">
                    {{ now()->format('d M Y') }}
                </span></span>
            <span class="pl-5">Pukul : <span class="font-black">
                    {{ now()->format('H:m:s') }}
                </span></span>
        </div>
    </header>

    <main class="w-full">
        <div class="grid grid-cols-4 gap-12 mb-20">
            {{-- ASOKA --}}
            <x-card title="ASOKA" :kelas1="$asoka1->jumlah_bed" :kelas2="$asoka2->jumlah_bed" :kelas3="$asoka3->jumlah_bed" :vip="$asokavip->jumlah_bed"
                :kapasitas="$asoka1->jumlah_bed + $asoka2->jumlah_bed + $asoka3->jumlah_bed + $asokavip->jumlah_bed" :terpakai="$asoka1->digunakan + $asoka2->digunakan + $asoka3->digunakan + $asokavip->digunakan" />

            {{-- BANGAU --}}
            <x-card title="BANGAU" :kelas3="$bangau3->jumlah_bed" :kapasitas="$bangau3->jumlah_bed" :terpakai="$bangau3->digunakan" />

            {{-- CAMAR --}}
            <x-card title="CAMAR" :kelas3="$camar3->jumlah_bed" :kapasitas="$camar3->jumlah_bed" :terpakai="$camar3->digunakan" />

            {{-- CEMPAKA --}}
            <x-card title="CEMPAKA" :kelas1="$cempaka1->jumlah_bed" :kelas2="$cempaka2->jumlah_bed" :kelas3="$cempaka3->jumlah_bed" :vip="$cempakavip->jumlah_bed"
                :kapasitas="$cempaka1->jumlah_bed +
                    $cempaka2->jumlah_bed +
                    $cempaka3->jumlah_bed +
                    $cempakavip->jumlah_bed" :terpakai="$cempaka1->digunakan + $cempaka2->digunakan + $cempaka3->digunakan + $cempakavip->digunakan" />

            {{-- CENDRAWASIH --}}
            <x-card title="CENDRAWASIH" :kelas1="$cendrawasih1->jumlah_bed" :kelas2="$cendrawasih2->jumlah_bed" :kelas3="$cendrawasih3->jumlah_bed" :vip="$cendrawasihvip->jumlah_bed"
                :kapasitas="$cendrawasih1->jumlah_bed +
                    $cendrawasih2->jumlah_bed +
                    $cendrawasih3->jumlah_bed +
                    $cendrawasihvip->jumlah_bed" :terpakai="$cendrawasih1->digunakan +
                    $cendrawasih2->digunakan +
                    $cendrawasih3->digunakan +
                    $cendrawasihvip->digunakan" />

            {{-- KENANGA --}}
            <x-card title="KENANGA" :kelas3="$kenanga3->jumlah_bed" :kapasitas="$kenanga3->jumlah_bed" :terpakai="$kenanga3->digunakan" />

            {{-- MERAK --}}
            <x-card title="MERAK" :kelas3="$merak3->jumlah_bed" :kapasitas="$merak3->jumlah_bed" :terpakai="$merak3->digunakan" />

            {{-- MERPATI --}}
            <x-card title="MERPATI" :kelas3="$merpati3->jumlah_bed" :kapasitas="$merpati3->jumlah_bed" :terpakai="$merpati3->digunakan" />
        </div>

        <div class="flex justify-end text-xl divide-x-2 divide-gray-500 tracking-widest">
            <p class="pr-5">
                Total Tersedia <span
                    class="font-medium border p-4 rounded bg-green-700 text-white shadow-md">{{ $totalBed }}</span>
            </p>
            <p class="pl-5">
                Total Terpakai <span
                    class="font-medium border p-4 rounded bg-gray-700 text-white shadow-md">{{ $totalTerpakai }}</span>
            </p>
        </div>
    </main>
</body>

</html>
