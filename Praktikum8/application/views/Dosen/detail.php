<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <div class="col-md-12">
    <h3>Detail Dosen</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggil Lahir</th>
                <th>Gender</th>
                <th>NIDN</th>
                <th>Pendidikan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $Dosen -> id ?></td>
                <td><?php echo $Dosen -> nama ?> </td>
                <td><?php echo $Dosen -> tmp_lahir ?></td>
                <td><?php echo $Dosen -> tgl_lahir ?></td>
                <td><?php echo $Dosen -> gender ?></td>
                <td><?php echo $Dosen -> nidn ?></td>
                <td><?php echo $Dosen -> pendidikan ?></td>
            </tr>
        </tbody>
    </table>
    </div>
</body>
</html>