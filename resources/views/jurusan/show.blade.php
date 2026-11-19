<h1>Daftar Jurusan</h1>
<table border="1" cellpadding="6">
    <tr>
        <th>id</th>
        <th>Kode</th>
        <th>Nama Jurusan</th>
        <th>Dibuat</th>
    </tr>

    <tr>
        <td>{{ $jurusan->id }}</td>
        <td>{{ $jurusan->kode }}</td>
        <td>{{ $jurusan->nama }}</td>
        <td>{{ $jurusan->created_at->format('d-m-Y H:i') }}</td>
    </tr>

</table>