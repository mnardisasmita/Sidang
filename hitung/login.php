<?php
/*
session_start();
include 'konak.php';
$username = $_POST['username'];
$password = $_POST['pass'];
// query untuk mendapatkan record dari username
$query = "SELECT * FROM user WHERE user = '$username'";
echo "$query";
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
// cek kesesuaian password
if ($password == $data['pass'])
{
echo "sukses";
    // menyimpan username dan level ke dalam session
    $_SESSION['level'] = $data['lever'];
    $_SESSION['username'] = $data['user'];
    header('location: index1.php');
}
else 
echo '<h1>Login gagal</h1>';
*/
?>

<?php
session_start();
include 'konak.php';
$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['pass']);
$password = md5($password);
// query untuk mendapatkan record dari username
$query = "SELECT * FROM user WHERE user = '$username'";
echo $password;
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);

//query untuk ruang
echo $data['ruang'];
// cek kesesuaian password
if ($password == $data['pass'])
{
echo "sukses";
    // menyimpan username dan level ke dalam session
    $_SESSION['level'] = $data['level'];
    $_SESSION['username'] = $data['user'];
	$_SESSION['ruang'] = $data['ruang'];
    //Penggunaan Meta Header HTTP
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=jadwal.php">';    
	exit;
}
else 
echo '<h1>Login gagal</h1>';
?>