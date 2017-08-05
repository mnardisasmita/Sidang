<?php
session_start();
?>
<style type="text/css">
		body {
		background: #cacaca;
		margin: 0;
		padding: 20px;
		font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
	   	font-weight: 300;
	}

	#table {
		display: table;
	 	
	 	width: 100%; 
	 	background: #fff;
	 	margin: 0;
	 	box-sizing: border-box;

	 }

	 .caption {
	 	display: block;
	 	width: 100%;
	 	background: #64e0ef;
	 	height: 55px;
	 	padding-left: 10px;
	 	color: #fff;
	 	font-size: 20px;
	 	line-height: 55px;
	 	text-shadow: 1px 1px 1px rgba(0,0,0,.3);
	 	box-sizing: border-box;
	 }


	 .header-row {
	 	background: #8b8b8b;
	 	color: #fff;

	 }

	.row {
		display: table-row;
	}

	.cell {
		display: table-cell;
		
		padding: 6px; 
		border-bottom: 1px solid #e5e5e5;
		text-align: center;
	}

	.primary {
		text-align: left;
	}


	input[type="radio"],
	input[type="checkbox"]{
		display: none;
	}


	@media only screen and (max-width: 760px)  {

		body {
			padding: 0;
		}

		#table {
			display: block;
			margin: 44px 0 0 0;
		}

		.caption {
			position: fixed;
			top: 0;
			text-align: center;
			height: 44px;
			line-height: 44px;
			z-index: 5;
			border-bottom: 2px solid #999;
		}

		.row { 
			position: relative;
			display: block;
			border-bottom: 1px solid #ccc; 

		}

		.header-row {
			display: none;
		}
		
		.cell { 
			display: block;

			border: none;
			position: relative;
			height: 45px;
			line-height: 45px;
			text-align: left;
		}

		.primary:after {
			content: "";
			display: block;
			position: absolute;
			right:20px;
			top:18px;
			z-index: 2;
			width: 0; 
			height: 0; 
			border-top: 10px solid transparent;
			border-bottom: 10px solid transparent; 
			border-right:10px solid #ccc;

		}

		.cell:nth-of-type(n+2) { 
			display: none; 
		}


		input[type="radio"],
		input[type="checkbox"] {
			display: block;
			position: absolute;
			z-index: 1;
			width: 99%;
			height: 100%;
			opacity: 0;
		}

		input[type="radio"]:checked ~ .cell,
		input[type="checkbox"]:checked ~ .cell {
			display: block;

			border-bottom: 1px solid #eee; 
		}

		input[type="radio"]:checked ~ .cell:nth-of-type(n+2),
		input[type="checkbox"]:checked ~ .cell:nth-of-type(n+2) {
			
			background: #e0e0e0;
		}

		input[type="radio"]:checked ~ .cell:nth-of-type(n+2):before,
		input[type="checkbox"]:checked ~ .cell:nth-of-type(n+2):before {
			content: attr(data-label);

			display: inline-block;
			width: 60px;
			background: #999;
			border-radius: 10px;
			height: 20px;
			margin-right: 10px;
			font-size: 12px;
			line-height: 20px;
			text-align: center;
			color: white;

		}

		input[type="radio"]:checked ~ .primary,
		input[type="checkbox"]:checked ~ .primary  {
			border-bottom: 2px solid #999;
		}

		input[type="radio"]:checked ~ .primary:after,
		input[type="checkbox"]:checked ~ .primary:after {
	 		position: absolute;
			right:18px;
			top:22px;
			border-right: 10px solid transparent;
			border-left: 10px solid transparent; 
			border-top:10px solid #ccc;
			z-index: 2;
		}
	}
</style>
<center>

<?php
// konek ke db script
include 'konak.php';

function check_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$tgl = check_input($_REQUEST["tanggal"]);
echo "Tanggal = ".$tgl."<br>";
$npm = check_input($_REQUEST["npm"]);
$ruang = check_input($_REQUEST["ruang"]);
$sesi = check_input($_REQUEST["sesi"]);
echo "NPM Mahasiswa = ".$npm."<br>";

//query yang dibutuhkan
$querymhs="SELECT * FROM `jadwal` WHERE `npm` = '$npm'";
//echo $querymhs;
$hasilquerymhs = mysql_query($querymhs)or die(mysql_error());
$row = mysql_fetch_array($hasilquerymhs);

//query yang dibutuhkan
$querymhs="SELECT * FROM `jadwal` WHERE `npm` = '$npm'";
//echo $querymhs;
$hasilquerymhs = mysql_query($querymhs)or die(mysql_error());
$mahasiswa = mysql_fetch_array($hasilquerymhs);

/*
echo $row['ruang'];
echo $row['sesi'];
echo $mahasiswa['nama'];
echo $row['pb1'];
$pb1 = $row['pb1'];
echo $row['pb2'];
$pb2 = $row['pb2'];
echo $row['ketua'];
$ket = $row['ketua'];
echo $row['sekretaris'];
$sek = $row['sekretaris'];
echo $row['anggota'];
$ang = $row['anggota'];
*/
//definisi variabel
$pb1 = $row['pb1'];
$pb2 = $row['pb2'];
$ket = $row['ketua'];
$sek = $row['sekretaris'];
$ang = $row['anggota'];

//mulai form
echo "Ruang : ".$row['ruang']."<br>";
echo "Sesi : ".$row['sesi']."<br>";
echo "Nama : ".$mahasiswa['nama']."<br>";
echo "NPM : ".$row['npm']."<br>";

echo "<br><br>";

//cek tentang pb1 dan apabila ada penggantian pb1
$pb1ket = check_input($_REQUEST["hadirpb1"]);
$pb1ganti = check_input($_REQUEST["penggantipb1"]);
if ($pb1ket == "tidak") {
	echo "Pembimbing 1 = ;".$row['pb1']." = tidak hadir <br>";
    echo "Pembimbing 1 pengganti = ".$pb1ganti."<br><br>";
}
else
{	echo "Pembimbing 1 = ".$row['pb1']." = ".$pb1ket."<br><br>";}

//cek tentang pb2 dan apabila ada penggantian pb2
$pb2ket = check_input($_REQUEST["hadirpb2"]);
$pb2ganti = check_input($_REQUEST["penggantipb2"]);
if ($pb2ket == "tidak") {
	echo "Pembimbing 2 = ".$row['pb2']." = tidak hadir <br>";
    echo "Pembimbing 2 pengganti = ".$pb2ganti."<br><br>";
}
else
{	echo "Pembimbing 2 = ".$row['pb2']." = ".$pb2ket."<br><br>";}

$ketket = check_input($_REQUEST["hadirketua"]);
$ketganti = check_input($_REQUEST["penggantiketua"]);
//echo "Ketua ".$row['ketua']." = ".$ketket."<br>";
if ($ketket == "tidak") {
	echo "Ketua = ".$row['ketua']." = tidak hadir <br>";
    echo "Ketua pengganti = ".$ketganti."<br><br>";
}
else
{	echo "Ketua = ".$row['ketua']." = ".$ketket."<br><br>";}

$sekket = check_input($_REQUEST["hadirsekre"]);
$sekganti = check_input($_REQUEST["penggantisekre"]);
//echo "Sekretaris ".$row['sekretaris']."= ".$sekket."<br>";
if ($sekket == "tidak") {
	echo "Sekretaris ".$row['sekretaris']." tidak hadir <br>";
    echo "Sekretaris pengganti = ".$sekganti."<br><br>";
}
else
{	echo "Sekretaris = ".$row['sekretaris']." = ".$sekket."<br><br>";}

//cek tentang anggota dan apabila ada penggantian anggota
$angket = check_input($_REQUEST["hadiranggota"]);
$angganti = check_input($_REQUEST["penggantianggota"]);
//echo "Anggota ".$row['anggota']."= ".$angket."<br>";
if ($angket == "tidak") {
	echo "Anggota ".$row['anggota']." tidak hadir <br>";
    echo "Anggota pengganti = ".$angganti."<br><br>";
}
else
{	echo "Anggota = ".$row['anggota']." = ".$angket."<br><br>";}

$queryabsen = "UPDATE `jadwal` SET `hadirpb1` = '$pb1ket', `penggantipb1` = '$pb1ganti', `hadirpb2` = '$pb2ket', `penggantipb2` = '$pb2ganti', `hadirketua` = '$ketket', `penggantiketua` = '$ketganti', `hadirsekre` = '$sekket', `penggantisekre` = '$sekganti', `hadiranggota` = '$angket', `penggantianggota` = '$angganti' WHERE `jadwal`.`npm` = '$npm'";
//echo $queryabsen;
$hasilqueryabsen = mysql_query($queryabsen)or die(mysql_error());
?>

<form method="post" action="hitungnilai.php">
	<input type="hidden" name="npm" value="<?php echo $npm?>">
	<input type="hidden" name="pb1ket" value="<?php echo $pb1ket?>">
	<input type="hidden" name="pb2ket" value="<?php echo $pb2ket?>">
	<input type="submit" value="Lanjut ke Format Penilaian Sidang Jurnal">
</form>

<form method="post" action="nilaianal.php">
	<input type="hidden" name="npm" value="<?php echo $npm?>">
	<input type="hidden" name="pb1ket" value="<?php echo $pb1ket?>">
	<input type="hidden" name="pb2ket" value="<?php echo $pb2ket?>">
	<input type="submit" value="Lanjut ke form Penilaian Sidang Usulan Penelitian ANALITIK">
</form>

<form method="post" action="nilaidesk.php">
	<input type="hidden" name="npm" value="<?php echo $npm?>">
	<input type="hidden" name="pb1ket" value="<?php echo $pb1ket?>">
	<input type="hidden" name="pb2ket" value="<?php echo $pb2ket?>">
	<input type="submit" value="Lanjut ke form Penilaian Sidang Usulan Penelitian DESKRIPTIF">
</form>



<center><input TYPE=button VALUE='Kembali Ke Halaman Sebelumnya (ABSEN)' onClick="history.go(-1);"></center>
<center><a href="jadwal.php">Kembali ke halaman awal </a></center>

<?php
//echo $npm;
//echo $pb1ket;
//echo $pb2ket;
?>

</center>