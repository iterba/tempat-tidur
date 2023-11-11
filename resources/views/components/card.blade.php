@props(['title', 'kapasitas', 'terpakai', 'kelas1', 'kelas2', 'kelas3', 'vip'])

<div class="p-5 rounded-lg bg-white text-gray-600 border-y-8">
    <div class="flex items-center justify-between mb-10">
        <span class="text-xl font-semibold tracking-widest leading-relaxed">{{ $title }}</span>
        <div class="flex flex-col items-end">
            <span class="text-gray-400 text-sm">Tersedia</span>
            <span class="text-gray-600 font-medium text-xl">
                {{ $kapasitas - $terpakai }}
                <i class="fa fa-bed ml-1"></i>
            </span>
        </div>
    </div>

    <div class="flex justify-between text-center text-sm">
        @isset($kelas1)
            <div>
                <div class="mb-1 text-md text-gray-400">KELAS 1</div>
                <div class="flex items-center border py-1 px-3 rounded-lg space-x-3">
                    <span class="font-medium text-xl">{{ $kelas1->jumlah_bed - $kelas1->digunakan }}</span>
                    <i class="fas fa-bed"></i>
                </div>
            </div>
        @endisset

        @isset($kelas2)
            <div>
                <div class="mb-1 text-md text-gray-400">KELAS 2</div>
                <div class="flex items-center border py-1 px-3 rounded-lg space-x-3">
                    <span class="font-medium text-xl">{{ $kelas2->jumlah_bed - $kelas2->digunakan }}</span>
                    <i class="fas fa-bed"></i>
                </div>
            </div>
        @endisset

        @isset($kelas3)
            <div>
                <div class="mb-1 text-md text-gray-400">KELAS 3</div>
                <div class="flex items-center border py-1 px-3 rounded-lg space-x-3">
                    <span class="font-medium text-xl">{{ $kelas3->jumlah_bed - $kelas3->digunakan }}</span>
                    <i class="fas fa-bed"></i>
                </div>
            </div>
        @endisset

        @isset($vip)
            <div>
                <div class="mb-1 text-md text-gray-400">VIP</div>
                <div class="flex items-center border py-1 px-3 rounded-lg space-x-3">
                    <span class="font-medium text-xl">{{ $vip->jumlah_bed - $vip->digunakan }}</span>
                    <i class="fas fa-bed"></i>
                </div>
            </div>
        @endisset
    </div>
</div>
