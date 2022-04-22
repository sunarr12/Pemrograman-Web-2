<?php
require_once 'class_mhs.php';
$mahasiswa1 = new Mahasiswa('01101', 'Sunar', 2021, 3.0, 'Sistem Informasi');
$mahasiswa2 = new Mahasiswa('01210', 'Heni', 2021, 2.3, 'Bisnis Digital');
$mahasiswa3 = new Mahasiswa('01219', 'Kamil', 2021, 2.5, 'Sistem Informasi');
$mahasiswa4 = new Mahasiswa('01313', 'Ahmad', 2021, 3.9, 'informatika');

$ar_siswa = [$mahasiswa1,$mahasiswa2,$mahasiswa3,$mahasiswa4];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="color: black;">

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                    <span class="navbar-toggler-icon"></span>
                </button> <a class="navbar-brand" href="#">WEB02</a>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="navbar-nav">
                     
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                                data-toggle="dropdown">Review PHP</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">  PHP1</a> <a class="dropdown-item" href="#">
                                    PHP3</a> <a class="dropdown-item" href="#"></a>
                                <div class="dropdown-divider">
                                </div> <a class="dropdown-item" href="#">PHP4</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                                data-toggle="dropdown">PHP05 OOP</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">  PHP1</a> <a class="dropdown-item" href="#">
                                    PHP3</a> <a class="dropdown-item" href="#"></a>
                                <div class="dropdown-divider">
                                </div> <a class="dropdown-item" href="#">PHP4</a>
                            </div>
                        </li>
                    </ul>
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="text" />
                        <button class="btn btn-primary my-2 my-sm-0" type="submit">
                            Search
                        </button>
                    </form>
                    <ul class="navbar-nav ml-md-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">login<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                                data-toggle="dropdown">Dropdown link</a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another
                                    action</a> <a class="dropdown-item" href="#">Something else
                                    here</a>
                                <div class="dropdown-divider">
                                </div> <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="row m-2">
        <div class="col-md-12">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th>
                            No
                        </th>
                        <th>
                            Nim
                        </th>
                        <th>
                            Nama
                        </th>
                        <th>
                            Prodi
                        </th>
                        <th>
                            Tahun Angkatan
                        </th>
                        <th>
                            IPK
                        </th>
                        <th>
                            Predikat
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                            $no = 1;
                            foreach ($ar_siswa as $siswa) : ?>
                    <tr>
                        <td>
                            <?= $no++?>
                        </td>
                        <td>
                            <?= $siswa->nim ?>
                        </td>
                        <td>
                            <?= $siswa->nama ?>
                        </td>
                        <td>
                            <?= $siswa->prodi ?>
                        </td>
                        <td>
                            <?= $siswa->thn_angkatan ?>
                        </td>
                        <td>
                            <?= $siswa->ipk ?>
                        </td>
                        <td>
                            <?= $siswa->predikat_ipk() ?>
                        </td>
                        <td>
                            Default
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
  




   
</body>

</html>