<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body>
    <div class="col-md-12">
    <h3>Matakuliah</h3>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>SKS</th>
                <th>Kode</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($Matakuliah as $Mk) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $Mk -> nama ?> </td>
                <td><?php echo $Mk -> sks ?></td>
                <td><?php echo $Mk -> kode ?></td>
               
               
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    </div>
</body>
</html>