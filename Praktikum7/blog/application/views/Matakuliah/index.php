<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matakuliah</title>
</head>
<body>
    <h3>Daftar Matakuliah</h3>
    <table border="1">
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
            foreach ($list_Mk as $Mk) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $Mk -> nama ?> </td>
                <td><?php echo $Mk -> sks ?></td>
                <td><?php echo $Mk -> kode ?></td>

            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>