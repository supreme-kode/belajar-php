<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Peserta</title>
</head>
<body>
  <h1>Daftar Nama Peserta</h1>
  <table>
    <tr>
      <th>No.</th>
      <th>Nama Peserta</th>
    </tr>
    <?php
    for ($i = 1; $i <= 10; $i++) {
      echo "<tr><td>$i</td><td>Nama Peserta $i</td></tr>";
    }
    ?>
  </table>
</body>
</html>