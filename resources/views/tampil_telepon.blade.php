<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h1>Data Tabel Telepon  </h1>
        <table border="2">
            <tr>
                <th>No</th>
                <th>Id</th>
                <th>Nomor Telepon</th>
                <th>Nama Pengguna</th>
            </tr>

            @php $no = 1; @endphp
            @foreach ($telepon as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->nomor_telepon }}</td>
                    <td>{{ $data->pengguna->nama }}</td>
                </tr>
    </center>
    @endforeach
    </table>
</body>

</html>
