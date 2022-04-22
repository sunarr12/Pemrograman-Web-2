<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="percabangan.php" method="POST">
        Nilai : <input type="number" name="nilai">
        <div class="col-sm-5">
    <input name="proses" type="submit">

     </div>
    </form>
    <?php 
    $nilai = $_POST['nilai'];
    echo "Nilai:" .$nilai;  
    echo "<br>";
    //if else

//     if ($nilai >= 85 && $nilai <= 100) {
//  echo "Grade : A";
//     } elseif ($nilai >= 74 && $nilai <= 84)  {
//         echo "Grade : B";   

// } elseif ($nilai >= 56 && $nilai <= 69)  {
//     echo "Grade : C";   

// } elseif ($nilai >= 36 && $nilai <= 55)  {
//     echo "Grade : D";   

// } elseif ($nilai >= 0 && $nilai <= 35)  {
//     echo "Grade : E";   
// }else {
//     echo "Grade : I";   
// }

 //switch
 switch ($nilai) {
     case $nilai >= 85 && $nilai <= 100 :
         echo "Sangat Memuaskan";
         break;
         case $nilai >= 74 && $nilai <= 84 :
        echo "Memuaskan";
        break;
         case$nilai >= 56 && $nilai <= 69 :
         echo "Cukup";
        break;
        case $nilai >= 36 && $nilai <= 55 :
        echo "Kurang";
        break;
         case $nilai >= 0 && $nilai <= 35 :
         echo "Sangat Kurang";
         break; 
     default:
        echo "Tidak ada";
         break;
 }
    ?>
</body>
</html>