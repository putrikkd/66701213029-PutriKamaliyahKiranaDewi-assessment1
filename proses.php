<?php
if(isset($_POST['submit'])) {
  $angka1 = $_POST['angka1'];
  $angka2 = $_POST['angka2'];
  $operator = $_POST['operator'];
}

if($operator == +){
  $hasil = $angka1 + $angka2;
  echo "Hasil penjumlahan $angka1 + $bil2 = $hasil"
} elseif($operator == -){
  $hasil = $angka1 - $angka2;
  echo "Hasil pengurangan $angka1 - $angka2 = $hasil"
} elseif($operator == *){
  $hasil = $angka1 * $angka2;
  echo "Hasil perkalian $angka1 * $angka2 = $hasil"
} elseif($operator == /){
  $hasil = $angka1 / $angka2;
  echo "Hasil pembagian $angka1 / $angka2 = $hasil"
} else{
  echo "Operator aritmatika tidak dikenali";
}
?>
