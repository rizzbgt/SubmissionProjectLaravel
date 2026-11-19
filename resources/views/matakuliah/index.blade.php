<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Matakuliah</title>
</head>

<body>
    <h1>Data Jurusan</h1>
    @if (session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif
    <a href="{{ route('matakuliah.create') }}">Matakuliah</a>
    
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama matakuliah</th>
                <th>sks</th>
                <th>aksi</th>
                <th>detail</th>
                
            </tr>
        </thead>
        <tbody>
            @forelse ($matakuliahs as $matakuliah)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $matakuliah->kode_matakuliah }}</td>
                    <td>{{ $matakuliah->nama_matakuliah }}</td>
                    <td>{{ $matakuliah->sks }}</td>
                    <td>
                        <a href="{{ route('matakuliah.show', $matakuliah) }}">Detail</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Belum ada data jurusan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>