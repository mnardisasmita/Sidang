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

<form method="post" action="prosesabsenruangsesihari.php">
	
<?php
$npm = $_GET['npm'];

// konek ke db script
include 'konak.php';
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
//$mhs = $mahasiswa['nama'];
?>
<center>
<table>
<tr>
	<td>Tanggal</td>
	<td><?php echo $row['tanggal']; ?><input type="hidden" name="tanggal" value="<?php echo $row['tanggal']; ?>"></td>
	<td></td>
</tr>
<tr>
	<td>Ruang</td>
	<td><?php echo $row['ruang']; ?><input type="hidden" name="ruang" value="<?php echo $row['ruang']; ?>"> </td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	
</tr>
<tr>
	<td>Sesi</td>
	<td><?php echo $row['sesi']; ?> <input type="hidden" name="sesi" value="<?php echo $row['sesi']; ?>"></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td>NPM</td>
	<td><?php echo$npm;?><input type="hidden" name="npm" value="<?php echo $row['npm']; ?>"></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td>Nama</td>
	<td><?php echo $mahasiswa['nama'];?></td>
	<td>Keterangan </td>
	<td>Dosen Pengganti</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td>Pembimbing 1</td>
	<td><?php echo $row['pb1']; ?> </td>
	<td>
		<select name="hadirpb1">
		<option value="hadir" selected>hadir
		<option value="tidak">tidak hadir
		</select>
	</td>
	<td><input type="text" name="penggantipb1" size="64"></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td>Pembimbing 2</td>
	<td><?php echo $row['pb2']; ?> </td>
	<td>
		<select name="hadirpb2">
		<option value="hadir" selected>hadir
		<option value="tidak">tidak hadir
		</select>
	</td>
	<td><input type="text" name="penggantipb2" size="64"></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td>Ketua</td>
	<td><?php echo $row['ketua']; ?> </td>
	<td>
		<select name="hadirketua">
		<option value="hadir" selected>hadir
		<option value="tidak">tidak hadir
		</select>
	</td>
	<td><input type="text" name="penggantiketua" size="64"></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td>Sekretaris</td>
	<td><?php echo $row['sekretaris']; ?> </td>
	<td>
		<select name="hadirsekre">
		<option value="hadir" selected>hadir
		<option value="tidak">tidak hadir
		</select>
	</td>
	<td><input type="text" name="penggantisekre" size="64"></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td>Anggota</td>
	<td><?php echo $row['anggota']; ?> </td>
	<td>
		<select name="hadiranggota">
		<option value="hadir" selected>hadir
		<option value="tidak">tidak hadir
		</select>
	</td>
	<td><input type="text"  name="penggantianggota" size="64"  ></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
</table>
<input type="submit" value="ABSEN">
</form>
</center>
<center><input TYPE=button VALUE='Kembali Ke Halaman Sebelumnya' onClick="history.go(-1);"></center>
<center><a href="jadwal.php">Kembali ke halaman awal </a></center>