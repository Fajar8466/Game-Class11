<?php
require_once '../db.php';
$conn = conn();

$getid = $_GET['id'];
$sql = "DELETE FROM siswa WHERE id=$getid";
$result = $conn->query($sql);

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