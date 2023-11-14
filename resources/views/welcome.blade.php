@extends('layout.app')

@section('content')
    <div class="grid gap-5 lg:grid-cols-4 lg:gap-12 mb-10 lg:mb-28">
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
    </div>

    <div class="flex justify-between items-center w-full">
        <a href="{{ route('detail') }}" class="font-medium hidden lg:block flex-none underline tracking-wider text-xl">Bed
            Detail</a>

        <div
            class="flex w-full justify-between text-center lg:text-left lg:justify-end text-xs lg:text-xl lg:divide-x-2 divide-gray-500 tracking-widest space-x-2">
            <p class="font-medium lg:pr-5 mb-10 lg:mb-0 flex flex-col lg:flex-row lg:items-center">
                <span>Kapasitas <br class="lg:hidden" /> Tempat Tidur</span>
                <span
                    class="text-center lg:text-5xl font-medium border p-4 rounded-lg shadow-md bg-sky-500 text-white mt-2 lg:mt-0 lg:ml-4">{{ $totalBed }}</span>
            </p>
            <p class="font-medium lg:pl-5 lg:pr-5 flex flex-col lg:flex-row lg:items-center">
                <span>Total <br class="lg:hidden" /> Terpakai</span>
                <span
                    class="text-center lg:text-5xl font-medium border p-4 rounded-lg bg-orange-400 text-white shadow-md mt-2 lg:mt-0 lg:ml-4">{{ $totalTerpakai }}</span>
            </p>
            <p class="font-medium lg:pl-5 flex flex-col lg:flex-row lg:items-center">
                <span>Total Tersedia <br /> (Bed Kosong)</span>
                <span
                    class="text-center lg:text-5xl font-medium border p-4 rounded-lg bg-green-600 text-white shadow-md mt-2 lg:mt-0 lg:ml-4">{{ $totalTersedia }}</span>
            </p>
        </div>
    </div>
@endsection
