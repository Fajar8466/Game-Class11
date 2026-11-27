<?php
require_once '../db.php';
$conn = conn();
$sql = "SELECT * FROM kelas";
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
    <a href="kelas.php">TAMBAH DATA KELAS</a>
    <table border="1">
        <tr>
            <th>NAMA KELAS</th>
            <th>JURUSAN</th>
            <th>HAPUS</th>
            <th>EDIT</th>
        </tr>
        <?php
        while ($data = $result->fetch_assoc()){ ?>
        <tr>
            <td><?= $data['nama_kelas'] ?></td>
            <td><?= $data['nama_jurusan'] ?></td>
            <td>
                <a href="delete_kelas.php?id=<?=$data['id']?>">DELETE</a>
            </td>
              <td>
                <a href="edit_kelas_from.php?id=<?=$data['id']?>">EDIT</a>
            </td>
        </tr>
        <?php } ?>

    </table>
</body>
</html>