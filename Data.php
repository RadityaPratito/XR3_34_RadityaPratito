<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>

<table>
   
   <tr>
    <td>Nama</td> <td>:<?php echo $_GET['nama'] ?? '' ?></td>
   </tr>

   <tr>
    <td>Alamat</td> <td>:<?php echo $_GET['alamat'] ?? '' ?></td>
   </tr>

   <tr>
    <td>Pesanan</td> <td>:<?php echo $_GET['telepon'] ?? '' ?></td>
   </tr>

  </table>
    
</body>
</html>