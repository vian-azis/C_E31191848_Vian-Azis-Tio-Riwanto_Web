<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E31191848 - Vian Azis Tio Riwanto</title>
</head>

<body>
    <?php
    foreach ($mahasiswa as $row) {
        echo "Nama : " . $row['nama'];
        echo "<br />";
        echo "Prodi : " . $row['prodi'];
        echo "<hr />";
    } ?>

</body>

</html>