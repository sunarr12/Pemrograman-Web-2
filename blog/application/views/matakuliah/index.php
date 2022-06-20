<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matakuliah</title>
</head>
<?php
$username = $this->session->userdata('username');
if ($username) {
    echo "<h2>Selamat Datang $username</h2>";
}
?>
<body>
<div id="page-conten-wrapper">
    <div class="container nt-3">
        <div class="row">
            <div class="col-12">
                <h4 style="text-align: center;">Matakuliah</h2>
                <table border="1" class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIDN</th>
                        <th>SKS</th>
                        <th>Kode</th>
                    </tr>
                    <?php $nomor = 1; foreach($matakuliah as $matkul): ?>
                    <tr>
                        <td><?= echo $nomor ?></td>
                        <td><?= echo $matkul -> nama ?> </td>
                        <td><?= echo $matkul -> nidn ?></td>
                        <td><?= echo $matkul -> sks?></td>
                        <td><?= echo $matkul -> kode?></td>
                        <td>
    <a href= <?php echo base_url("index.php/matakuliah/edit/$matkul->id") ?>
    class="btn btn-success btn-lg active" role="button" aria-pressed="true">Edit</a>
    &nbsp;
    <a href= <?php echo base_url("index.php/matakuliah/delete/$matkul->id") ?> class="btn btn-danger btn-lg active";
    onclick=" return hapusMatkul('Anda yakin ingin menghapus matkul <?php echo $matkul->nama ?>?')">Hapus</a>
    </td>
                    </tr>
                    <?php $no++; endforeach; ?>
                </table>
                <a href="<?=bash_url()?>index.php/matakuliah/form" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Tambah</a>;
            </div>
        </div>
    </div>
</div>   
</body>
</html>