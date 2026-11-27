<?php

/** koneksi ke database */
function conn(){
  $conn = new mysqli('localhost','root','','sekolah');
  return $conn;
}  
