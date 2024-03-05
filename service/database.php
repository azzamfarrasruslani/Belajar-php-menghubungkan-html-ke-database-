<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "buku_tamu"; //merupakan variabel yang digunakan untuk memberi tahu database mana yang akan digunakan

$db = mysqli_connect($hostname, $username, $password, $database_name);
if ($db->connect_error) {
    echo "koneksi data base rusak";
    die("error!");   //Digunakan untuk mengecek koneksi ke data base
} 

?>