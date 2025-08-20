<?php

  echo "Variabel bebas diisi dengan nilai apa saja<br>";

  $m = 17;        // integer
  $n = "aku";     // string
  $p = 17.42;     // float

  echo "Penulisan variabel yang salah:<br>";

  // $4ever;         // SALAH: diawali angka
  // $_salah satu;   // SALAH: ada spasi
  // $nama*^;        // SALAH: karakter khusus

  echo "Penulisan variabel yang benar dan cara menampilkannya:<br>";

  $a = 17;
  $b = "m hadi nasrullah $a";
  echo $b; // Hasil: m hadi nasrullah 16

?>