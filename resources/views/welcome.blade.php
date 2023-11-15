@extends('layout.app')

@section('content')
    <div class="grid gap-5 lg:grid-cols-3 2xl:grid-cols-4 lg:gap-5 mb-10 lg:mb-28">
        {{-- ASOKA --}}
        <x-card title="ASOKA" :kelas1="$asoka1" :kelas2="$asoka2" :kelas3="$asoka3" :vip="$asokavip"
            class="bg-gradient-to-tr from-[#4e54c8] to-[#8f94fb] text-white" :kapasitas="$asoka1->jumlah_bed + $asoka2->jumlah_bed + $asoka3->jumlah_bed + $asokavip->jumlah_bed" :terpakai="$asoka1->digunakan + $asoka2->digunakan + $asoka3->digunakan + $asokavip->digunakan" />

        {{-- BANGAU --}}
        <x-card title="BANGAU" :kelas3="$bangau3" :kapasitas="$bangau3->jumlah_bed" :terpakai="$bangau3->digunakan"
            class="bg-gradient-to-tr from-[#F0C27B] to-[#4B1248] text-white" />

        {{-- CAMAR --}}
        <x-card title="CAMAR" :kelas3="$camar3" :kapasitas="$camar3->jumlah_bed" :terpakai="$camar3->digunakan"
            class="text-white bg-gradient-to-br from-[#FEAC5E] via-[#C779D0] to-[#4BC0C8]" />

        {{-- CEMPAKA --}}
        <x-card title="CEMPAKA" :kelas1="$cempaka1" :kelas2="$cempaka2" :kelas3="$cempaka3" :vip="$cempakavip"
            :kapasitas="$cempaka1->jumlah_bed + $cempaka2->jumlah_bed + $cempaka3->jumlah_bed + $cempakavip->jumlah_bed" :terpakai="$cempaka1->digunakan + $cempaka2->digunakan + $cempaka3->digunakan + $cempakavip->digunakan" class="bg-gradient-to-br from-[#0a9f46] to-[#0575E6] text-white" />

        {{-- CENDRAWASIH --}}
        <x-card title="CENDRAWASIH" :kelas1="$cendrawasih1" :kelas2="$cendrawasih2" :kelas3="$cendrawasih3" :vip="$cendrawasihvip"
            :kapasitas="$cendrawasih1->jumlah_bed +
                $cendrawasih2->jumlah_bed +
                $cendrawasih3->jumlah_bed +
                $cendrawasihvip->jumlah_bed" :terpakai="$cendrawasih1->digunakan +
                $cendrawasih2->digunakan +
                $cendrawasih3->digunakan +
                $cendrawasihvip->digunakan"
            class="bg-gradient-to-br from-[#900560] via-[#C03059] to-[#F8904A] text-white" />

        {{-- KENANGA --}}
        <x-card title="KENANGA" :kelas3="$kenanga3" :kapasitas="$kenanga3->jumlah_bed" :terpakai="$kenanga3->digunakan"
            class="bg-gradient-to-tl from-[#d88a03] to-[#51c471] text-white" />

        {{-- MERAK --}}
        <x-card title="MERAK" :kelas3="$merak3" :kapasitas="$merak3->jumlah_bed" :terpakai="$merak3->digunakan"
            class="bg-gradient-to-br from-[#43C6AC] to-[#191654] text-white" />

        {{-- MERPATI --}}
        <x-card title="MERPATI" :kelas3="$merpati3" :kapasitas="$merpati3->jumlah_bed" :terpakai="$merpati3->digunakan"
            class="bg-gradient-to-tl from-[#3CA55C] to-[#B5AC49] text-white" />

        <div class="md:inline-block w-full hidden 2xl:hidden space-y-3">
            <p class="flex items-center">
                <span class="mb-2 font-medium leading-tight">Kapasitas <br/> Tempat Tidur</span>
                <span class="w-3/12 p-3 text-xl tracking-wider align-middle text-center ml-auto text-white bg-sky-500 rounded font-medium">{{ $totalBed }}</span>
            </p>
            <p class="flex items-center">
                <span class="mb-2 font-medium leading-tight">Total <br/> Terpakai</span>
                <span class="w-3/12 p-3 text-xl tracking-wider align-middle text-center ml-auto text-white bg-orange-500 rounded font-medium">{{ $totalTerpakai }}</span>
            </p>
            <p class="flex items-center">
                <span class="mb-2 font-medium leading-tight">Total Tersedia <br /> (Bed Kosong)</span>
                <span class="w-3/12 p-3 text-xl tracking-wider align-middle text-center ml-auto text-white bg-green-600 rounded font-medium">{{ $totalTersedia }}</span>
            </p>
        </div>
    </div>

    <div class="flex justify-between items-center w-full md:hidden 2xl:flex 2xl:items-center">
        <a href="{{ route('detail') }}" class="font-medium hidden lg:block flex-none underline tracking-wider text-xl">
            Bed Detail
        </a>

        <div class="flex w-full 2xl:w-fit 2xl:space-x-10 justify-between lg:justify-start text-center mb-3 2xl:mb-0 text-sm 2xl:divide-x-2 divide-gray-900">
            <p class="flex flex-col 2xl:flex-row 2xl:items-center 2xl:text-lg 2xl:tracking-widest">
                <span class="mb-2 font-medium">Kapasitas <br class="2xl:hidden"/> Tempat Tidur bawah</span>
                <span class="2xl:ml-5 2xl:text-4xl 2xl:px-3 text-lg text-white bg-sky-500 rounded font-medium py-1">
                    {{ $totalBed }}
                </span>
            </p>
            <p class="flex flex-col 2xl:flex-row 2xl:items-center 2xl:text-lg 2xl:tracking-widest 2xl:pl-10">
                <span class="mb-2 font-medium">Total <br class="2xl:hidden"/> Terpakai</span>
                <span class="2xl:ml-5 2xl:text-4xl 2xl:px-3 text-lg text-white bg-orange-500 rounded font-medium py-1">
                    {{ $totalTerpakai }}
                </span>
            </p>
            <p class="flex flex-col 2xl:flex-row 2xl:items-center 2xl:text-lg 2xl:tracking-widest 2xl:pl-10">
                <span class="mb-2 font-medium">Total Tersedia <br class="2xl:hidden" /> (Bed Kosong)</span>
                <span class="2xl:ml-5 2xl:text-4xl 2xl:px-3 text-lg text-white bg-green-600 rounded font-medium py-1">
                    {{ $totalTersedia }}
                </span>
            </p>
        </div>
    </div>
@endsection
