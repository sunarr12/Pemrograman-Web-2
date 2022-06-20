<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
</head>
<?php
$username = $this->session->userdata('username');
if ($username) {
    echo "<h2>Selamat Datang $username</h2>";
}
?>
<body>
<div class="col-md-12">
 <h4 style="text-align: center;">
 Daftar Dosen
 </h4>
 <table border="1" class="table">
 <thead>
 <tr>
 <th>No</th><th>Nama</th><th>NIDN</th>
<th>Pendidikan</th><th>Action</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $nomor=1;
 foreach($dosen as $dsn){
 ?>
 <tr>
 <td> <?= $nomor ?> </td>
 <td> <?= $dsn -> nama ?></td>
 <td> <?= $dsn -> nidn ?></td>
 <td><?=$dsn->pendidikan?></td>
<td>
    <a href="<?= base_url("index.php/dosen/detail/$dsn->id") ?>">Detail</a>
</td>
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