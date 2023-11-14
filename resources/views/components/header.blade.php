<header class="py-10 lg:w-6/12 lg:mb-10">
    <a href="{{ route('home') }}">
        <h1 class="text-lg w-full lg:w-[600px] md:text-4xl font-medium mb-5 leading-tight">
            Informasi Kapasitas Ketersediaan Tempat Tidur Rawat Inap
        </h1>
    </a>

    <div class="text-sm lg:text-md font-medium tracking-wider text-gray-500 divide-x-2 divide-gray-500">
        <span class="pr-3">Tanggal : <span class="font-black text-gray-900">
                {{ now()->format('d M Y') }}
            </span></span>
        <span class="pl-5">Pukul : <span class="font-black text-gray-900">
                {{ now()->format('H:i:s') }}
            </span></span>
    </div>

    <img src="{{ asset('assets/logo/erba-hospital.png') }}" alt="Ernaldi Bahar"
        class="absolute invisible lg:visible top-10 right-24 opacity-30" width="300">
</header>
