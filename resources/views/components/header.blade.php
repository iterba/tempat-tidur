<header class="py-5 lg:py-6 lg:w-8/12 2xl:w-6/12 2xl:mb-10 2xl:py-10">
    <a href="{{ route('home') }}">
        <h1 class="text-lg w-full mb-3 lg:mb-0 2xl:w-[600px] lg:text-2xl 2xl:text-4xl 2xl:mb-5 font-medium leading-tight">
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
        class="absolute invisible lg:visible 2xl:top-12 lg:top-5 lg:right-44 2xl:right-24 opacity-30 -z-10" width="300">
</header>
