<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Informasi Tempat Tidur - {{ config('config.name', 'RS. Ernaldi Bahar') }}</title>

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div style="text-align: center">
        <div class="container-fluid mt-2">
            <h3>Informasi Tempat Tidur RS Ernaldi Bahar</h3>
        </div>
    </div>

    <div class="mt-3">
        <div class="container-fluid">
            <div class="card text">
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">No</th>
                                <th scope="col">Nama Ruang</th>
                                <th scope="col">Kapasitas</th>
                                <th scope="col">Terpakai</th>
                                <th scope="col">Tersedia</th>
                            </tr>
                        </thead>

                        <tbody>
                            @php $no = 1; @endphp

                            @foreach ($kamar as $value)
                                <tr>
                                    <td class="text-center">{{ $no++ }}</td>
                                    <td>{{ $value->nama_kamar }}</td>
                                    <td class="text-center">{{ $value->jumlah_bed }}</td>
                                    <td class="text-center">{{ $value->digunakan }}</td>
                                    <td class="text-center">{{ $value->jumlah_bed - $value->digunakan }}</td>
                                </tr>
                            @endforeach
                        </tbody>

                        <tfoot>
                            <tr class="text-center">
                                <th colspan="2">TOTAL</th>
                                <th>{{ $totalBed }}</th>
                                <th>{{ $totalTerpakai }}</th>
                                <th>{{ $totalBed - $totalTerpakai }}</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="card-footer text-muted text-end">
                    Tanggal : {{ now()->format('d-m-Y') }} / Pukul : {{ now()->format('H:i:s') }}
                </div>
            </div>
        </div>
    </div>
</body>

</html>
