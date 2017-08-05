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
<div class="caption"><center>Jadwal Hari Selasa,
Tanggal
<?php
// konek ke db script
include 'konak.php';
//query yang dibutuhkan
// nanti harus diganti, harus per tanggal hari dan ruangan berdasarkan variabel nya dari halaman sebelumnya
$rses = $_SESSION["ruang"] ; 
$querytanggal="SELECT * FROM `jadwal` WHERE `tanggal` = '2017-02-14' AND  `ruang` ='$rses' ORDER BY sesi";
$hasilquerytanggal = mysql_query($querytanggal)or die(mysql_error());
$row = mysql_fetch_array($hasilquerytanggal);
if ($row['tanggal'] == '2017-02-14') 
	{
    echo "14 Februari 2017, ";
	}
else
{
	echo "Hari lain bukan ujian<br>";
}
//echo $row['ruang']."<br>";
?>
Ruang,
<?php 
$row = mysql_fetch_array($hasilquerytanggal);
echo $row['ruang']; 
?></center>
</div>	

<center><table>
<tr>
	<td><span class="cell primary">Sesi</span></td>
	<td><span class="cell primary">NPM</td>
	<td><span class="cell primary">Nama</td>
	<td><span class="cell primary">Pembimbing 1</td>
	<td><span class="cell primary">Pembimbing 2</td>
	<td><span class="cell primary">Ketua</td>
	<td><span class="cell primary">Sekretaris</td>
	<td><span class="cell primary">Anggota</td>
	<td><span class="cell primary">Absen</td>
</tr>
<?php
//query yang dibutuhkan
//$querytanggal="SELECT * FROM `jadwalujian2014` WHERE `tanggal` = '2014-12-16' AND  `ruang` =1";
$hasilquerytanggal = mysql_query($querytanggal)or die(mysql_error());

while ($row = mysql_fetch_array($hasilquerytanggal))
{
	$sesi = $row['sesi'];
	$npm = $row['npm'];
echo "<tr>";
echo "<td>".$sesi."</td>";
echo "<td>".$npm."</td>";
?>
<td>
		<?php
		//query yang dibutuhkan
		$querymhs="SELECT * FROM `jadwal` WHERE `npm` = '$npm'";
		//echo $querymhs;
		$hasilquerymhs = mysql_query($querymhs)or die(mysql_error());
		$mahasiswa = mysql_fetch_array($hasilquerymhs);
		echo $mahasiswa['nama'];
		?>
</td>
<?php
echo "<td>".$row['pb1']."</td>";
echo "<td>".$row['pb2']."</td>";
echo "<td>".$row['ketua']."</td>";
echo "<td>".$row['sekretaris']."</td>";
echo "<td>".$row['anggota']."</td>";
echo "<td><a href='absensesiperhari.php?npm=".$npm."' title='KLIK'>Absen  ".$npm."</a>"."</td>";
echo "</tr>";

}
?>

</table></center>


<br><br>

Sesi 1 = Jam 08.00-09.00<br>
Sesi 2 = Jam 09.00-10.00<br>
Sesi 3 = Jam 10.00-11.00<br>
Sesi 4 = Jam 11.00-12.00<br>
Sesi 5 = Jam 12.00-13.00<br>
<center><a href="jadwal.php">Kembali ke halaman awal </a></center>