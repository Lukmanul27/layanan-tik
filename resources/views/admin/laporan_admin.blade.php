<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @page {
            margin: 3cm 3cm 3cm 4cm;
        }
        body {
            font-family: "Times New Roman", Times, serif;
        }
        h3 {
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
    <title>Laporan Admin</title>
</head>

<body>
    <h3>Laporan</h3>
    <hr>
    <p>Total Akun Terdaftar: {{ $totalUsers }}</p>
    <p>Total Layanan Keluar: {{ $totalLayanan }}</p>
    <p>Total Permintaan Masuk: {{ $totalPermintaan }}</p>
    <hr>
    <h3>Daftar Pelayanan:</h3>
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pelayanan as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->deskripsi }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
    <h3>List Akun Terdaftar:</h3>
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($akun as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
    <h3>List Pengajuan Masuk</h3>
    <p>Berikut List Permintaan Masuk</p>
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Nama Layanan</th>
                <th>Tanggal</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengajuan->sortByDesc('created_at') as $data)
            @if($data->status == "Pengajuan")
            <tr>
                <td>{{$loop->iteration}}.</td>
                <td>
                    {{ \App\Models\User::find($data->user_id)->name }}
                </td>
                <td>{{ \App\Models\Pelayanan::find($data->pelayanan_id)->nama }}</td>
                <td>{{ $data->created_at->format('d-m-Y') }}</td>
                <td>{{ $data->status }}</td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>
    <hr>
    <h3>List Pengajuan Diterima</h3>
    <p>Berikut List Permintaan Diterima</p>
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Nama Layanan</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Nama Petugas</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengajuan->where('status', 'Diterima')->sortByDesc('created_at') as $data)
            <tr>
                <td>{{$loop->iteration}}.</td>
                <td>
                    {{ \App\Models\User::find($data->user_id)->name }}
                </td>
                <td>{{ \App\Models\Pelayanan::find($data->pelayanan_id)->nama }}</td>
                <td>{{ $data->created_at->format('d-m-Y') }}</td>
                <td>{{ $data->status }}</td>
                <td>
                    @if (!empty($data->petugas_data))
                    {{ json_decode($data->petugas_data)->name }}
                    @else
                    Belum Ada Petugas Dipilih
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
    <h3>List Pengajuan Ditolak</h3>
    <p>Berikut List Permintaan Ditolak</p>
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Nama Layanan</th>
                <th>Tanggal</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengajuan->where('status', 'Ditolak')->sortByDesc('created_at') as $data)
            <tr>
                <td>{{$loop->iteration}}.</td>
                <td>{{ \App\Models\User::find($data->user_id)->name }}</td>
                <td>{{ \App\Models\Pelayanan::find($data->pelayanan_id)->nama }}</td>
                <td>{{ $data->created_at->format('d-m-Y') }}</td>
                <td>{{ $data->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
