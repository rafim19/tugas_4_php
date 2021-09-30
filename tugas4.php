<?php
  // Nomor 1
  echo "<h2>Nomor 1</h2>";
  $hargaBeli = 8000;
  $hargaJual = 7500;
  $keuntungan = 300;
  $kuantitasBeli = (8000 - 7500)/300;
  echo "Harga Beli = Rp $hargaBeli" . "<br>";
  echo "Harga Jual = Rp $hargaJual" . "<br>";
  echo "Keuntungan = Rp $keuntungan" . "<br>";
  echo "Berapa jumlah kambing yang dibeli?" . "<br>";
  echo "Jawaban = " . round($kuantitasBeli) . "<br>";
?>

<?php
  // Nomor 2
  // Suatu pintu air di suatu tempat mempunyai 523 cabang saluran, dalam satu minggu terpakai 8891 liter air. Berapa liter air rata-rata yang dipakai oleh tiap-tiap keluarga dalam waktu itu ?

  echo "<h2>Nomor 2</h2>";
  $saluran_air = 523;
  $debit_seminggu = 8891;

  $rata2 = $debit_seminggu / $saluran_air;

  echo "Jumlah Saluran = $saluran_air<br>";
  echo "Jumlah terpakai = $debit_seminggu<br>";
  echo "Rata-rata Pemakaian = ...?<br>";
  echo "Jawaban : $rata2 liter/keluarga<br>";
?>