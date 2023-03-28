<?php
if(isset($_POST['submit'])) {
  $bil1 = $_POST['bil1'];
  $bil2 = $_POST['bil2'];
  $operasi = $_POST['operasi'];
}

if($operasi == +){
  $hasil = $bil1 + $bil2;
} elseif($operasi == +){
  $hasil = $bil1 + $bil2;
} elseif($operasi == -){
  $hasil = $bil1 - $bil2;
} elseif($operasi == *){
  $hasil = $bil1 * $bil2;
} elseif($operasi == /){
  $hasil = $bil1 / $bil2;
} else{
  echo "Error";
}

echo "Hasil operasi aritmatik $bil1 + $bil2 = $hasil
?>
