<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 10px;
}
</style>
<body>
    <div style="overflow-x:auto;">
    <table>
        <thead>
                <tr>
                    <th>Id Guru</th>
                    <th>Nama Guru</th>
                    <th>NIP</th>
                    <th>Kelamin</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                </tr>
        </thead>
<tbody>
    @foreach ($data as $v)
        <tr>
        <td> {{ $v['id_guru'] }} </td>
        <td> {{ $v['nama_guru'] }} </td>
        <td> {{ $v['nip'] }} </td>
        <td> {{ $v['kelamin'] }} </td>
        <td> {{ $v['alamat_guru'] }} </td>
        <td> {{ $v['telpon_guru'] }} </td>
        </tr>
    @endforeach
</tbody>
</table>
</div>
</body>