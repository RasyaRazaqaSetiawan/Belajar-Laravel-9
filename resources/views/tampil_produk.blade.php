<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h1>Data Tabel Produk  </h1>
        <table border="2">
            <tr>
                <th>No</th>
                <th>Id</th>
                <th>Nama Produk</th>
                <th>Nama Jumlah</th>
                <th>Nama Produksi</th>
                <th>Nama merek</th>
            </tr>

            @php $no = 1; @endphp
            @foreach ($produk as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->nama_produk }}</td>
                    <td>{{ $data->jumlah }}</td>
                    <td>{{ $data->tanggal_produksi }}</td>
                    <td>{{ $data->merek->nama_merek }}</td>
                </tr>
    </center>
    @endforeach
    </table>
</body>

</html>
