<?php
require_once '../db.php';
$conn = conn();
$sql = "SELECT * FROM siswa";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="siswa.php">TAMBAH DATA SISWA</a>
    <table border="1">
        <tr>
            <th>NISN</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>HAPUS DATA</th>
        </tr>
        <?php
        while ($data = $result->fetch_assoc()){ ?>
        <tr>
            <td><?= $data['nisn'] ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?php echo $data['alamat'] ?></td>
            <td>
                <a href="delete_siswa.php?id=<?=$data['id']?>">DELETE</a>
            </td>
        </tr>
        <?php } ?>

    </table>
</body>
</html>