<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_konakin = "localhost";
$database_konakin = "laporan_skripsi";
$username_konakin = "user";
$password_konakin = "root";
$konakin = mysql_pconnect($hostname_konakin, $username_konakin, $password_konakin) or trigger_error(mysql_error(),E_USER_ERROR); 
?>