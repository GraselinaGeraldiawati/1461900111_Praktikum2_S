<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Join</title>
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
                    <th>Nama Siswa</th>
                    <th>NIS</th>
                    <th>Kelas</th>
                    <th>Kelamin</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                </tr>
        </thead>
<tbody>
    @foreach ($data as $v)
        <tr>
        <td> {{ $v['nama_siswa'] }} </td>
        <td> {{ $v['nis'] }} </td>
        <td> {{ $v['nama_kelas'] }} </td>
        <td> {{ $v['kelamin'] }} </td>
        <td> {{ $v['alamat_siswa'] }} </td>
        <td> {{ $v['telpon_siswa'] }} </td>
        </tr>
    @endforeach
</tbody>
</table>
</div>
</body>