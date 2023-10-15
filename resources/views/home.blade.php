<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GUA KEREN WOY</title>
</head>
<body>
    <table style="">
        <tr>
            <th>Nama</th>
            <th>Fakultas</th>
            <th>Jenis Kelamin</th>
            <th>Aksi</th>
        </tr>
        @foreach ($data as $a)

        <tr>
            <td>{{ $a['nama'] }}</td>
            <td>{{ $a['jk'] }}</td>
            <td>{{ $a['fakultas'] }}</td>
            <td>
                <a href="/detail/{{ $a['id'] }}">id</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
