<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>PASIEN</title>
</head>
<body class=" bg-info text-white">

    <div class="container">
        <form action="bmi.php" method="GET">
          <h2 class="text-center mb-5">Form Pasien</h2>
  <div class="form-group row">
    <label for="Tanggal__Periksa" class="col-4 col-form-label">Tanggal Periksa</label> 
    <div class="col-8">
      <input id="Tanggal__Periksa" name="Tanggal__Periksa" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Kode__Pasien" class="col-4 col-form-label">Kode Pasien</label> 
    <div class="col-8">
      <input id="Kode__Pasien" name="Kode__Pasien" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Nama__Lengkap" class="col-4 col-form-label">Nama Pasien</label> 
    <div class="col-8">
      <input id="Nama__Lengkap" name="Nama__Lengkap" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Berat__" class="col-4 col-form-label">Berat Badan</label> 
    <div class="col-8">
      <input id="Berat__" name="Berat__" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Tinggi___" class="col-4 col-form-label">Tinggi Badan</label> 
    <div class="col-8">
      <input id="Tinggi__" name="Tinggi__" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Gender</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Gender__" id="Gender__0" type="radio" class="custom-control-input" value="L"> 
        <label for="Gender__0" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="Gender__" id="Gender__1" type="radio" class="custom-control-input" value="P"> 
        <label for="Gender__1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8 mb-5">
      <input class="bg-primary text-white" type="submit" value="SIMPAN" name="proses">
    </div>
  </div>
</form>
</div>
</div>

<hr class="mb-5">
<?php require_once "class_BMI.php"; ?>

    <div class="container">
    <table class="table table-striped">
<h2 class="text-center mb-5">Data BMI Pasien</h2>
  <thead class="text-white">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tanggal Periksa</th>
      <th scope="col">Kode Pasien</th>
      <th scope="col">Nama Pasien</th>
      <th scope="col">Gender</th>
      <th scope="col">Berat (kg)</th>
      <th scope="col">Tinggi (cm)</th>
      <th scope="col">Nilai BMI</th>
      <th scope="col">Status BMI</th>
    </tr>
  </thead>
  <tbody class="text-white">
    <?php
    $nomor = 1;
    foreach ($ar_pasien as $pasien) {
        echo '<tr><td>' . $nomor . '</td>';
        echo '<td> ' . $pasien['Tanggal Periksa'] . '</td>';
        echo '<td> ' . $pasien['Kode Pasien'] . '</td>';
        echo '<td> ' . $pasien['Nama'] . '</td>';
        echo '<td> ' . $pasien['Gender'] . '</td>';
        echo '<td> ' . $pasien['Berat (kg)'] . '</td>';
        echo '<td> ' . $pasien['Tinggi (cm)'] . '</td>';
        $BMI = $pasien["Berat (kg)"] / (($pasien["Tinggi (cm)"] / 100) ** 2);
        echo '<td>' . number_format($BMI, 1) . '</td>';
        $status = new bmiPasien();
        echo $status->statusBMI($BMI);
        echo '</tr>';
        $nomor++;
    }
    ?>
  </tbody>
</table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    
</body>
</html>