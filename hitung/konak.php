<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sidangup2017";

$koneksi = mysql_connect($servername, $username, $password);
$database = mysql_select_db($dbname);

if (!$koneksi){
      echo "Koneksi gagal . .";
} else {
      if(!$database){
            echo "Database tidak ditemukan . .";
      }
}

?>