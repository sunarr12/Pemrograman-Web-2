<?php
 class bmiPasien
 {
     public $nama,
        $berat,
        $tinggi,
        $kode,
        $tanggal,
        $gender;

    public function hasilBMI()
    {
        return "<b>Nama : $this->nama <br><br>
                Berat Badan : $this->berat <br><br>
                Tinggi Badan : $this->tinggi <br><br>
                Kode Pasien : $this->kode <br><br>
                Gender : $this->gender</br>";
    }
    public function statusBMI($BMI)
    {
        if ($BMI < 18.5) {
            return "<td>Kekurangan Berat Badan</td>";
        } elseif ($BMI >= 18.5 && $BMI <= 24.9) {
            return "<td>Normal (Ideal)</td>";
        }    elseif ($BMI >= 20.0 && $BMI <= 29.9) {
            return "<td>Kelebihan Berat Badan</td>";
        }  else {
            return "<td>Kegemukan (Obesitas</td>";
        } 
    }
 }
 if (isset($_GET["Nama__Lengkap"])) {
   $bmi = new bmiPasien;
   $bmi->nama = $_GET["Nama__Lengkap"];
   $bmi->berat = $_GET["Berat__"];
   $bmi->tinggi = $_GET["Tinggi__"];
   $bmi->gender = $_GET["Gender__"];
   $bmi->tanggal = $_GET["Tanggal__Periksa"];
   $bmi->kode = $_GET["Kode__Pasien"];
 }
 $pasien1 = ['Tanggal Periksa' => '2022-01-10', 'Kode Pasien' => 'P001', 'Nama' => 'Ahmad', 'Gender' => 'L', 'Berat (kg)' => 69.8, 'Tinggi (cm)' => 169,];
 $pasien2 = ['Tanggal Periksa' => '2022-01-10', 'Kode Pasien' => 'P002', 'Nama' => 'Rina', 'Gender' => 'P', 'Berat (kg)' => 55.3, 'Tinggi (cm)' => 165,];
 $pasien3 = ['Tanggal Periksa' => '2022-01-11', 'Kode Pasien' => 'P003', 'Nama' => 'Lutfi', 'Gender' => 'L', 'Berat (kg)' => 45.3, 'Tinggi (cm)' => 171,];
 $pasien4 = ['Tanggal Periksa' => $bmi->tanggal, 'Kode Pasien' => $bmi->kode, 'Nama' => $bmi->nama, 'Gender' => $bmi->gender, 'Berat (kg)' => $bmi->berat, 'Tinggi (cm)' => $bmi->tinggi];

$ar_pasien = [$pasien1, $pasien2, $pasien3, $pasien4];
?>