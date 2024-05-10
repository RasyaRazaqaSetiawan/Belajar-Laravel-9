<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="2">
        <tr>
            <th>No</th>
            <th>Id</th>
            <th>Title</th>
        </tr>

        @php $no = 1; @endphp
        @foreach ($pengguna as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->id }}</td>
                <td>{{ $data->nama }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
