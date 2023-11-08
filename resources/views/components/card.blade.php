@props(['title', 'kapasitas', 'terpakai', 'kelas1', 'kelas2', 'kelas3', 'vip'])

<div class="p-5 rounded-lg bg-white text-gray-600 shadow-md">
    <div class="text-center mb-5">
        <div class="text-2xl font-bold font-loto tracking-widest">
            {{ $title }}
        </div>
        <div class="text-3xl font-medium text-gray-800">
            {{ $kapasitas - $terpakai }}
        </div>
    </div>

    <div class="flex justify-between mb-5 text-center text-lg">
        @isset($kelas1)
            <div>
                <div>KELAS 1</div>
                <div class="text-gray-800 font-medium">
                    {{ $kelas1 }}
                </div>
            </div>
        @endisset

        @isset($kelas2)
            <div>
                <div>KELAS 2</div>
                <div class="text-gray-800 font-medium">
                    {{ $kelas2 }}
                </div>
            </div>
        @endisset

        @isset($kelas3)
            <div>
                <div>KELAS 3</div>
                <div class="text-gray-800 font-medium">
                    {{ $kelas3 }}
                </div>
            </div>
        @endisset

        @isset($vip)
            <div>
                <div>VIP</div>
                <div class="text-gray-800 font-medium">
                    {{ $vip }}
                </div>
            </div>
        @endisset
    </div>

    <div class="flex justify-between items-center">
        <div>
            <span>Kapasitas</span>
            <span class="text-gray-800 font-medium">
                {{ $kapasitas ?? 0 }}
            </span>
        </div>
        <div>
            <span>Terpakai</span>
            <span class="text-gray-800 font-medium">
                {{ $terpakai ?? 0 }}
            </span>
        </div>
    </div>
</div>
