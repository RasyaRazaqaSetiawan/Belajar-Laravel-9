<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tampil kelas Laravel</title>
</head>

<body>
    <center>
        <h1>TABEL SISWA</h1>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Agama</th>
                <th>Telepon</th>
                <th>Email</th>
            </tr>
            @php $no = 1; @endphp
            @foreach ($siswa as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->jenis_kelamin }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>{{ $data->agama }}</td>
                    <td>{{ $data->telepon }}</td>
                    <td>{{ $data->email }}</td>
                </tr>
            @endforeach
        </table>
    </center>
</body>

</html>
