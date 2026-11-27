<?php
require_once '../db.php';
$db = conn();

$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

$sql = "INSERT INTO siswa (nisn,nama,alamat) VALUES ('$nisn', '$nama', '$alamat')";
$resulit = $db->query($sql);

if ($result == 1){
    echo "<script>
    alert('Berhasil');
    location.href ='list_siswa.php';
    </script>";
} else{
    echo "<script>
    alert('gagal');
    location.href = 'list_siswa.php';
    </script>";
}
