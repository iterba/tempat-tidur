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
        <h1 class="text-lg w-full lg:w-[600px] md:text-4xl font-medium mb-5 leading-tight">
            Informasi Kapasitas Ketersediaan Tempat Tidur Rawat Inap
        </h1>

        <div class="text-sm lg:text-md font-medium tracking-wider text-gray-500 divide-x-2 divide-gray-500">
            <span class="pr-3">Tanggal : <span class="font-black text-gray-900">
                    {{ now()->format('d M Y') }}
                </span></span>
            <span class="pl-5">Pukul : <span class="font-black text-gray-900">
                    {{ now()->format('H:i:s') }}
                </span></span>
        </div>

        {{-- <img src="{{ asset('assets/logo/logo.png') }}" alt="Ernaldi Bahar"
            class="absolute -top-20 right-40 opacity-10 -z-10 rotate-12" width="350"> --}}
        <img src="{{ asset('assets/logo/erba-hospital.png') }}" alt="Ernaldi Bahar"
            class="absolute invisible lg:visible top-10 right-24 opacity-30" width="300">
    </header>

    <main class="w-full">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-xl text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xl text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">No</th>
                        <th scope="col" class="px-6 py-3">Nama Kamar</th>
                        <th scope="col" class="px-6 py-3 text-center">Kapasitas</th>
                        <th scope="col" class="px-6 py-3 text-center">Terpakai</th>
                        <th scope="col" class="px-6 py-3 text-center">Tersedia</th>
                    </tr>
                </thead>
                @php $no = 1; @endphp
                @foreach ($all as $a)
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $no++ }}</th>
                            <td class="px-6 py-4">{{ $a->nama_kamar }}</td>
                            <td class="px-6 py-4 text-center">{{ $a->jumlah_bed }}</td>
                            <td class="px-6 py-4 text-center">{{ $a->digunakan }}</td>
                            <td class="px-6 py-4 text-center">{{ $a->jumlah_bed - $a->digunakan }}</td>
                        </tr>
                @endforeach
                </tbody>
                <tfoot class="text-xl text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-center" colspan="2">TOTAL</th>

                        <th scope="col" class="px-6 py-3 text-center">{{$totalBed}}</th>
                        <th scope="col" class="px-6 py-3 text-center">{{$totalTerpakai}}</th>
                        <th scope="col" class="px-6 py-3 text-center">{{$totalTersedia}}</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </main>
</body>

</html>
