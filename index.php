<?php
  $total_gaji_produksi = (4300000 - 110000) + 700000;
  $total_gaji_marketing = (4200000 - 90000) + 750000;
  $total_gaji_hrd = (4500000 - 70000) + 450000;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Refli</title>
</head>
<body>
  <table border="1">
    <tr>
      <th>Bagian</th>
      <th>Gaji Pokok</th>
      <th>Tunjangan</th>
      <th>Asuransi</th>
      <th>Gaji Bersih</th>
    </tr>
    <tr>
      <td>Produksi</td>
      <td>4300000</td>
      <td>700000</td>
      <td>110000</td>
      <td><?= $total_gaji_produksi ?></td>
    </tr>
    <tr>
      <td>Marketing</td>
      <td>4200000</td>
      <td>750000</td>
      <td>90000</td>
      <td><?= $total_gaji_marketing ?></td>
    </tr>
    <tr>
      <td>HRD</td>
      <td>4500000</td>
      <td>450000</td>
      <td>70000</td>
      <td><?= $total_gaji_hrd ?></td>
    </tr>
  </table>
</body>
</html>