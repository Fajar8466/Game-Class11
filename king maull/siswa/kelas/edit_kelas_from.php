<?php
require_once '../db.php';

$conn = conn();
$getid = $_GET['id'];
$sql = "SELECT * FROM kelas WHERE id = '$getid'";
$result = $conn->query($sql);

while ($data = $result->fetch_assoc()){
    $nama_kelas = $data['nama_kelas'];
    $nama_jurusan = $data['nama_jurusan'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="edit_kelas.php?id=<?= $getid ?>" method="post">
        <div>
            <input type="text" name="nama_kelas" value="<?= $nama_kelas ?>">
        </div>
        <div>
            <input type="text" name="nama_jurusan" value="<?= $nama_jurusan ?>">
        </div>
        <div>
            <button type="submit">Edit</button>
        </div>
    </form>
</body>
</html>