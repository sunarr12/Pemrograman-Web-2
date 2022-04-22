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
        <!-- </div> -->

        <div class="row my-3 ml-2">
            <div class="col-md-12">
                <h2>Form Nilai Ujian</h2>
            </div>
        </div>
        <div class="row p-5 mx-5">
            <div class="col-md-12">
                <form action="form_nilaimahasiswa.php" method="POST">
                    <div class="form-group row">
                        <label for="nim" class="col-4 col-form-label">NIM</label>
                        <div class="col-8">
                            <div class="input-group">
                              
                                <input id="nim" name="nim" placeholder="NIM " type="text" class="form-control"
                                    required="required">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="matkul" class="col-4 col-form-label">Pilih Mata Kuliah</label>
                        <div class="col-8">
                            <select id="matkul" name="matkul" class="custom-select" required="required">
                                <option value="1">Basis Data</option>
                                <option value="2">Pemrograman Web</option>
                                <option value="3">Jaringan Komputer</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai" class="col-4 col-form-label">Nilai</label>
                        <div class="col-8">
                            <div class="input-group">
                             
                                <input id="nilai" name="nilai" placeholder="Nilai" type="text" class="form-control"
                                    required="required">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php
require_once 'class_nilaimahasiswa.php';
$_nim = $_POST['nim'];
$_nilai = $_POST['nilai'];
$_matkul = $_POST['matkul'];
$_submit = $_POST['submit'];

switch ($_matkul) {
    case '1':
        $nama_matkul = 'Basis Data';
        break;
    case '2':
        $nama_matkul = 'Pemrograman Web';
        break;
    case '3':
        $nama_matkul = 'Jaringan Komputer';
        break;
        
    default:
    $nama_matkul = 'erorr';
        break;
}

$mahasiswa = new NilaiMahasiswa($nama_matkul, $_nilai, $_nim);
if (isset($_submit)) :
?>
        <div class="row mx-5">
            <div class="col-md-12">
                <p>Nim : <?= $_nim?></p>
                <p>Nama Matakuliah : <?= $nama_matkul?></p>
                <p>Nilai : <?= $_nilai?></p>
                <p>Hasil Ujian : <?= $mahasiswa-> grade()?></p>
                <p>Grade : <?= $mahasiswa->hasil()?></p>
            </div>
        </div>

        <?php endif?>
       
    </div>
</body>

</html>