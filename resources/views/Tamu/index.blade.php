<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Tamu</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>nama</th>
            <th>asal</th>
            <th>kamar</th>
        </tr>
        @foreach ($tamu as $item)
        <tr>
            <td>{{$item->nama}}</td>
            <td>{{$item->asal}}</td>
            <td>{{$item->kamar}}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>