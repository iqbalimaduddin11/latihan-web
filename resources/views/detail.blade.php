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
            <th>ID</th>
        </tr>
        <tr>
            <td>{{ $data['nama'] }}</td>
            <td>{{ $data['jk'] }}</td>
            <td>{{ $data['fakultas'] }}</td>
            <td>{{ $data['id'] }}</td>
        </tr>
    </table>
</body>
</html>
