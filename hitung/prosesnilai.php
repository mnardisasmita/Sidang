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
//proses baru ambil nilai dari form javascript langsung
$indexrubriks11 = check_input($_REQUEST["indexrubriks11"]);
$indexrubriks12 = check_input($_REQUEST["indexrubriks12"]);
$indexrubriks13 = check_input($_REQUEST["indexrubriks13"]);
$indexrubriks14 = check_input($_REQUEST["indexrubriks14"]);
$indexrubriks15 = check_input($_REQUEST["indexrubriks15"]);
/*echo "Index Rubriks 1<br>";
echo $indexrubriks11."<br>";
echo $indexrubriks12."<br>";
echo $indexrubriks13."<br>";
echo $indexrubriks14."<br>";
echo $indexrubriks15."<br>";
*/

$indexrubriks21 = check_input($_REQUEST["indexrubriks21"]);
$indexrubriks22 = check_input($_REQUEST["indexrubriks22"]);
$indexrubriks23 = check_input($_REQUEST["indexrubriks23"]);
$indexrubriks24 = check_input($_REQUEST["indexrubriks24"]);
$indexrubriks25 = check_input($_REQUEST["indexrubriks25"]);
/*
echo "Index Rubriks 2<br>";
echo $indexrubriks21."<br>";
echo $indexrubriks22."<br>";
echo $indexrubriks23."<br>";
echo $indexrubriks24."<br>";
echo $indexrubriks25."<br>";
*/

$indexrubriks31 = check_input($_REQUEST["indexrubriks31"]);
$indexrubriks32 = check_input($_REQUEST["indexrubriks32"]);
$indexrubriks33 = check_input($_REQUEST["indexrubriks33"]);
$indexrubriks34 = check_input($_REQUEST["indexrubriks34"]);
$indexrubriks35 = check_input($_REQUEST["indexrubriks35"]);

$indexrubriks41 = check_input($_REQUEST["indexrubriks41"]);
$indexrubriks42 = check_input($_REQUEST["indexrubriks42"]);
$indexrubriks43 = check_input($_REQUEST["indexrubriks43"]);
$indexrubriks44 = check_input($_REQUEST["indexrubriks44"]);
$indexrubriks45 = check_input($_REQUEST["indexrubriks45"]);

$indexrubriks51 = check_input($_REQUEST["indexrubriks51"]);
$indexrubriks52 = check_input($_REQUEST["indexrubriks52"]);
$indexrubriks53 = check_input($_REQUEST["indexrubriks53"]);
$indexrubriks54 = check_input($_REQUEST["indexrubriks54"]);
$indexrubriks55 = check_input($_REQUEST["indexrubriks55"]);

$indexrubriks61 = check_input($_REQUEST["indexrubriks61"]);
$indexrubriks62 = check_input($_REQUEST["indexrubriks62"]);
$indexrubriks63 = check_input($_REQUEST["indexrubriks63"]);
$indexrubriks64 = check_input($_REQUEST["indexrubriks64"]);
$indexrubriks65 = check_input($_REQUEST["indexrubriks65"]);

$indexrubriks71 = check_input($_REQUEST["indexrubriks71"]);
$indexrubriks72 = check_input($_REQUEST["indexrubriks72"]);
$indexrubriks73 = check_input($_REQUEST["indexrubriks73"]);
$indexrubriks74 = check_input($_REQUEST["indexrubriks74"]);
$indexrubriks75 = check_input($_REQUEST["indexrubriks75"]);

$indexrubriks81 = check_input($_REQUEST["indexrubriks81"]);
$indexrubriks82 = check_input($_REQUEST["indexrubriks82"]);
$indexrubriks83 = check_input($_REQUEST["indexrubriks83"]);
$indexrubriks84 = check_input($_REQUEST["indexrubriks84"]);
$indexrubriks85 = check_input($_REQUEST["indexrubriks85"]);

$indexrubriks91 = check_input($_REQUEST["indexrubriks91"]);
$indexrubriks92 = check_input($_REQUEST["indexrubriks92"]);
$indexrubriks93 = check_input($_REQUEST["indexrubriks93"]);
$indexrubriks94 = check_input($_REQUEST["indexrubriks94"]);
$indexrubriks95 = check_input($_REQUEST["indexrubriks95"]);

$indexrubriks101 = check_input($_REQUEST["indexrubriks101"]);
$indexrubriks102 = check_input($_REQUEST["indexrubriks102"]);
$indexrubriks103 = check_input($_REQUEST["indexrubriks103"]);
$indexrubriks104 = check_input($_REQUEST["indexrubriks104"]);
$indexrubriks105 = check_input($_REQUEST["indexrubriks105"]);

$indexrubriks111 = check_input($_REQUEST["indexrubriks111"]);
$indexrubriks112 = check_input($_REQUEST["indexrubriks112"]);
$indexrubriks113 = check_input($_REQUEST["indexrubriks113"]);
$indexrubriks114 = check_input($_REQUEST["indexrubriks114"]);
$indexrubriks115 = check_input($_REQUEST["indexrubriks115"]);

$indexrubriks121 = check_input($_REQUEST["indexrubriks121"]);
$indexrubriks122 = check_input($_REQUEST["indexrubriks122"]);
$indexrubriks123 = check_input($_REQUEST["indexrubriks123"]);
$indexrubriks124 = check_input($_REQUEST["indexrubriks124"]);
$indexrubriks125 = check_input($_REQUEST["indexrubriks125"]);

$indexrubriks131 = check_input($_REQUEST["indexrubriks131"]);
$indexrubriks132 = check_input($_REQUEST["indexrubriks132"]);
$indexrubriks133 = check_input($_REQUEST["indexrubriks133"]);
$indexrubriks134 = check_input($_REQUEST["indexrubriks134"]);
$indexrubriks135 = check_input($_REQUEST["indexrubriks135"]);

$indexrubriks141 = check_input($_REQUEST["indexrubriks141"]);
$indexrubriks142 = check_input($_REQUEST["indexrubriks142"]);
$indexrubriks143 = check_input($_REQUEST["indexrubriks143"]);
$indexrubriks144 = check_input($_REQUEST["indexrubriks144"]);
$indexrubriks145 = check_input($_REQUEST["indexrubriks145"]);

$indexrubriks151 = check_input($_REQUEST["indexrubriks151"]);
$indexrubriks152 = check_input($_REQUEST["indexrubriks152"]);
$indexrubriks153 = check_input($_REQUEST["indexrubriks153"]);
$indexrubriks154 = check_input($_REQUEST["indexrubriks154"]);
$indexrubriks155 = check_input($_REQUEST["indexrubriks155"]);

$indexrubriks161 = check_input($_REQUEST["indexrubriks161"]);
$indexrubriks162 = check_input($_REQUEST["indexrubriks162"]);
$indexrubriks163 = check_input($_REQUEST["indexrubriks163"]);
$indexrubriks164 = check_input($_REQUEST["indexrubriks164"]);
$indexrubriks165 = check_input($_REQUEST["indexrubriks165"]);

$indexrubriks171 = check_input($_REQUEST["indexrubriks171"]);
$indexrubriks172 = check_input($_REQUEST["indexrubriks172"]);
$indexrubriks173 = check_input($_REQUEST["indexrubriks173"]);
$indexrubriks174 = check_input($_REQUEST["indexrubriks174"]);
$indexrubriks175 = check_input($_REQUEST["indexrubriks175"]);



if(isset($_POST["indexrubriks193"]))
	{
		$indexrubriks181 = check_input($_REQUEST["indexrubriks181"]);
		$indexrubriks182 = check_input($_REQUEST["indexrubriks182"]);
		$indexrubriks183 = check_input($_REQUEST["indexrubriks183"]);
		$indexrubriks184 = check_input($_REQUEST["indexrubriks184"]);
		$indexrubriks185 = check_input($_REQUEST["indexrubriks185"]);

		$indexrubriks191 = check_input($_REQUEST["indexrubriks191"]);
		$indexrubriks192 = check_input($_REQUEST["indexrubriks192"]);
		$indexrubriks193 = check_input($_REQUEST["indexrubriks193"]);
		$indexrubriks194 = check_input($_REQUEST["indexrubriks194"]);
		$indexrubriks195 = check_input($_REQUEST["indexrubriks195"]);

		$indexrubriks201 = check_input($_REQUEST["indexrubriks201"]);
		$indexrubriks202 = check_input($_REQUEST["indexrubriks202"]);
		$indexrubriks203 = check_input($_REQUEST["indexrubriks203"]);
		$indexrubriks204 = check_input($_REQUEST["indexrubriks204"]);
		$indexrubriks205 = check_input($_REQUEST["indexrubriks205"]);

		$indexrubriks211 = check_input($_REQUEST["indexrubriks211"]);
		$indexrubriks212 = check_input($_REQUEST["indexrubriks212"]);
		$indexrubriks213 = check_input($_REQUEST["indexrubriks213"]);
		$indexrubriks214 = check_input($_REQUEST["indexrubriks214"]);
		$indexrubriks215 = check_input($_REQUEST["indexrubriks215"]);

	} 
else
	{
		if(isset($_POST["indexrubriks183"]))
		{
			$indexrubriks181 = check_input($_REQUEST["indexrubriks181"]);
			$indexrubriks182 = check_input($_REQUEST["indexrubriks182"]);
			$indexrubriks183 = check_input($_REQUEST["indexrubriks183"]);
			$indexrubriks184 = check_input($_REQUEST["indexrubriks184"]);
			$indexrubriks185 = check_input($_REQUEST["indexrubriks185"]);
			
			$indexrubriks191 = "0";
			$indexrubriks192 = "0";
			$indexrubriks193 = "0";
			$indexrubriks194 = "0";
			$indexrubriks195 = "0";

			$indexrubriks201 = "0";
			$indexrubriks202 = "0";
			$indexrubriks203 = "0";
			$indexrubriks204 = "0";
			$indexrubriks205 = "0";

			$indexrubriks211 = "0";
			$indexrubriks212 = "0";
			$indexrubriks213 = "0";
			$indexrubriks214 = "0";
			$indexrubriks215 = "0";
		}
		else
		{
			$indexrubriks181 = "0";
			$indexrubriks182 = "0";
			$indexrubriks183 = "0";
			$indexrubriks184 = "0";
			$indexrubriks185 = "0";

			$indexrubriks191 = "0";
			$indexrubriks192 = "0";
			$indexrubriks193 = "0";
			$indexrubriks194 = "0";
			$indexrubriks195 = "0";

			$indexrubriks201 = "0";
			$indexrubriks202 = "0";
			$indexrubriks203 = "0";
			$indexrubriks204 = "0";
			$indexrubriks205 = "0";

			$indexrubriks211 = "0";
			$indexrubriks212 = "0";
			$indexrubriks213 = "0";
			$indexrubriks214 = "0";
			$indexrubriks215 = "0";
		}

	}

//proses baru ambil nilai dari halaman sebelumnya
//$ntotalPB1A = check_input($_REQUEST["ntotalPB1A"]);
//echo "Nilai pembimbing 1 = ".$ntotalPB1A."<br>";


//proses ambil nilai dari halaman sebelumnya
$npm = check_input($_REQUEST["npm"]);
//echo "NPM Mahasiswa = ".$npm."<br>";
$pb1 = check_input($_REQUEST["PB1"]);
//echo "Nilai pembimbing 1 = ".$pb1."<br>";
$pb2 = check_input($_REQUEST["PB2"]);
//echo "Nilai pembimbing 2 = ".$pb2."<br>";
$ket = check_input($_REQUEST["KETUA"]);
//echo "Nilai Ketua = ".$ket."<br>";
$sek = check_input($_REQUEST["SEKRETARIS"]);
//echo "Nilai Sekretaris = ".$sek."<br>";
$ang = check_input($_REQUEST["ANGGOTA"]);
//echo "Nilai Anggota = ".$ang."<br>";
//$cekpb = check_input($_REQUEST["keteranganpb"]);

//proses cek pb, bila tidak ada gunakan if yang sesuai

if ($pb1 == "0" or $pb1 =="")
{	
		$nilaitotal = ((($pb2)/1)*0.6)+((($ket+$sek+$ang)/3)*0.4) ;
	
}
elseif ($pb2 =="0" or $pb2 =="")
{
		$nilaitotal = ((($pb1)/1)*0.6)+((($ket+$sek+$ang)/3)*0.4) ;

}
else
{
		$nilaitotal = ((($pb1+$pb2)/2)*0.6)+((($ket+$sek+$ang)/3)*0.4) ;
		//echo "nilai total=".$nilaitotal."<br>";
}


?>
<center><table>
<tr>
	<td>NPM Mahasiswa  </td>
	<td>= <?php echo $npm; ?></td>
</tr>
<tr>
	<td>Nilai pembimbing 1  </td>
	<td>= <?php echo $pb1; ?></td>
	<td> </td>
</tr>
<tr>
	<td>Nilai pembimbing 2  </td>
	<td>= <?php echo $pb2; ?></td>
</tr>
<tr>
	<td>Nilai Ketua  </td>
	<td>= <?php echo $ket; ?></td>
</tr>
<tr>
	<td>Nilai Sekretaris  </td>
	<td>= <?php echo $sek; ?></td>
</tr>
<tr>
	<td>Nilai Anggota  </td>
	<td>= <?php echo $ang; ?></td>
</tr>
<tr>
	<td>Nilai Total  </td>
	<td>= <?php echo $nilaitotal; ?></td>
</tr>
</table></center>
<?php
//query masukan data nilai mahasiswa
$query = "UPDATE `nilai` SET `nilaipb1` = '$pb1',`nilaipb2` = '$pb2',`nilaiketua` = '$ket',`nilaisekre` = '$sek',`nilaianggota` = '$ang',`total` = '$nilaitotal' WHERE `nilai`.`npm` = '$npm';";
//$query = "INSERT INTO `laporan_skripsi`.`sidang2014` (`no`, `npm`, `pb1`, `pb2`, `ketua`, `sekretaris`, `anggota`, `total`) VALUES (NULL,'$npm','$pb1','$pb2','$ket','$sek','$ang','$nilaitotal');";
//echo $query."<br><br>";
//$hasil = mysql_query($query);
//if ($hasil) echo "Data berhasil disimpan.";
   // else echo "Data gagal disimpan.";
 $hasil = mysql_query($query);

//<center><input TYPE=button VALUE='Kembali Ke Halaman Sebelumnya' onClick="history.go(-1);"></center>

//Query untuk update rubriks
//cek apakah data sudah ada atau tidak
$caridatarubriks = "SELECT npm,pembimbing FROM indexrubriks WHERE `indexrubriks`.`npm` = '$npm' AND `indexrubriks`.`pembimbing` = 'pb1';";
//echo $caridatarubriks;
$hasilcariterubriks = mysql_query($caridatarubriks);

$adadata=mysql_num_rows($hasilcariterubriks);
	if( $adadata == 1)
	{
		//echo "Ada data ".mysql_num_rows($hasilcariterubriks);
		$updaterubriks = "UPDATE `indexrubriks` SET `npm` = '$npm', `pembimbing` = 'pb1', `sidang` = 'sidang', `index1` = '$indexrubriks11', `index2` = '$indexrubriks21', `index3` = '$indexrubriks31' , `index4` = '$indexrubriks41', `index5` = '$indexrubriks51', `index6` = '$indexrubriks61', `index7` = '$indexrubriks71', `index8` = '$indexrubriks81', `index9` = '$indexrubriks91', `index10` = '$indexrubriks101', `index11` = '$indexrubriks111', `index12` = '$indexrubriks121', `index13` = '$indexrubriks131', `index14` = '$indexrubriks141', `index15` = '$indexrubriks151', `index16` = '$indexrubriks161', `index17` = '$indexrubriks171', `index18` = '$indexrubriks181', `index19` = '$indexrubriks191', `index20` = '$indexrubriks201', `index21` = '$indexrubriks211' WHERE `indexrubriks`.`npm` = '$npm' AND `indexrubriks`.`pembimbing` = 'pb1';";
		$hasilupdaterubriks = mysql_query($updaterubriks);
		//echo $updaterubriks;
	}
	else
	{
		$inserupdaterubriks = "INSERT INTO `indexrubriks` (`no`, `npm`, `pembimbing`, `sidang`, `index1`, `index2`, `index3`, `index4`, `index5`, `index6`, `index7`, `index8`, `index9`, `index10`, `index11`, `index12`, `index13`, `index14`, `index15`, `index16`, `index17`, `index18`, `index19`, `index20`, `index21`) VALUES (NULL, '$npm', 'pb1','sidang', '$indexrubriks11', '$indexrubriks21', '$indexrubriks31', '$indexrubriks41', '$indexrubriks51', '$indexrubriks61', '$indexrubriks71', '$indexrubriks81', '$indexrubriks91', '$indexrubriks101', '$indexrubriks111', '$indexrubriks121', '$indexrubriks131', '$indexrubriks141', '$indexrubriks151', '$indexrubriks161', '$indexrubriks171', '$indexrubriks181', '$indexrubriks191', '$indexrubriks201', '$indexrubriks211');";
		//echo $inserupdaterubriks;
		$hasilinserupdaterubriks = mysql_query($inserupdaterubriks);
		//echo "tidak ada data";
	}

//untuk pb2
$caridatarubriks2 = "SELECT npm,pembimbing FROM indexrubriks WHERE `indexrubriks`.`npm` = '$npm' AND `indexrubriks`.`pembimbing` = 'pb2';";
$hasilcariterubriks2 = mysql_query($caridatarubriks2);

$adadata2=mysql_num_rows($hasilcariterubriks2);
	if( $adadata2 == 1)
	{
		//echo "Ada data ".mysql_num_rows($hasilcariterubriks);
		$updaterubriks2 = "UPDATE `indexrubriks` SET `npm` = '$npm', `pembimbing` = 'pb2', `sidang` = 'sidang', `index1` = '$indexrubriks12', `index2` = '$indexrubriks22', `index3` = '$indexrubriks32' , `index4` = '$indexrubriks42', `index5` = '$indexrubriks52', `index6` = '$indexrubriks62', `index7` = '$indexrubriks72', `index8` = '$indexrubriks82', `index9` = '$indexrubriks92', `index10` = '$indexrubriks102', `index11` = '$indexrubriks112', `index12` = '$indexrubriks122', `index13` = '$indexrubriks132', `index14` = '$indexrubriks142', `index15` = '$indexrubriks152', `index16` = '$indexrubriks162', `index17` = '$indexrubriks172', `index18` = '$indexrubriks182', `index19` = '$indexrubriks192', `index20` = '$indexrubriks202', `index21` = '$indexrubriks212' WHERE `indexrubriks`.`npm` = '$npm' AND `indexrubriks`.`pembimbing` = 'pb2';";
		$hasilupdaterubriks2 = mysql_query($updaterubriks2);
		//echo $updaterubriks2;
	}
	else
	{
		//echo mysql_num_rows($hasilcariterubriks);
		$inserupdaterubriks2 = "INSERT INTO `indexrubriks` (`no`, `npm`, `pembimbing`, `sidang`, `index1`, `index2`, `index3`, `index4`, `index5`, `index6`, `index7`, `index8`, `index9`, `index10`, `index11`, `index12`, `index13`, `index14`, `index15`, `index16`, `index17`, `index18`, `index19`, `index20`, `index21`) VALUES (NULL, '$npm', 'pb2','sidang', '$indexrubriks12', '$indexrubriks22', '$indexrubriks32', '$indexrubriks42', '$indexrubriks52', '$indexrubriks62', '$indexrubriks72', '$indexrubriks82', '$indexrubriks92', '$indexrubriks102', '$indexrubriks112', '$indexrubriks122', '$indexrubriks132', '$indexrubriks142', '$indexrubriks152', '$indexrubriks162', '$indexrubriks172', '$indexrubriks182', '$indexrubriks192', '$indexrubriks202', '$indexrubriks212');";
		//echo $inserupdaterubriks2;
		$hasilinserupdaterubriks2 = mysql_query($inserupdaterubriks2);
		//echo "tidak ada data";
	}

//untuk ketua penguji
$caridatarubriks3 = "SELECT npm,pembimbing FROM indexrubriks WHERE `indexrubriks`.`npm` = '$npm' AND `indexrubriks`.`pembimbing` = 'ketua';";
$hasilcariterubriks3 = mysql_query($caridatarubriks3);

$adadata3=mysql_num_rows($hasilcariterubriks3);
	if( $adadata3 == 1)
	{
		//echo "Ada data ".mysql_num_rows($hasilcariterubriks);
		$updaterubriks3 = "UPDATE `indexrubriks` SET `npm` = '$npm', `pembimbing` = 'ketua', `sidang` = 'sidang', `index1` = '$indexrubriks13', `index2` = '$indexrubriks23', `index3` = '$indexrubriks33' , `index4` = '$indexrubriks43', `index5` = '$indexrubriks53', `index6` = '$indexrubriks63', `index7` = '$indexrubriks73', `index8` = '$indexrubriks83', `index9` = '$indexrubriks93', `index10` = '$indexrubriks103', `index11` = '$indexrubriks113', `index12` = '$indexrubriks123', `index13` = '$indexrubriks133', `index14` = '$indexrubriks143', `index15` = '$indexrubriks153', `index16` = '$indexrubriks163', `index17` = '$indexrubriks173', `index18` = '$indexrubriks183', `index19` = '$indexrubriks193', `index20` = '$indexrubriks203', `index21` = '$indexrubriks213' WHERE `indexrubriks`.`npm` = '$npm' AND `indexrubriks`.`pembimbing` = 'ketua';";
		$hasilupdaterubriks3 = mysql_query($updaterubriks3);
		//echo $updaterubriks3;
	}
	else
	{
		//echo mysql_num_rows($hasilcariterubriks);
		$inserupdaterubriks3 = "INSERT INTO `indexrubriks` (`no`, `npm`, `pembimbing`, `sidang`, `index1`, `index2`, `index3`, `index4`, `index5`, `index6`, `index7`, `index8`, `index9`, `index10`, `index11`, `index12`, `index13`, `index14`, `index15`, `index16`, `index17`, `index18`, `index19`, `index20`, `index21`) VALUES (NULL, '$npm', 'ketua','sidang', '$indexrubriks13', '$indexrubriks23', '$indexrubriks33', '$indexrubriks43', '$indexrubriks53', '$indexrubriks63', '$indexrubriks73', '$indexrubriks83', '$indexrubriks93', '$indexrubriks103', '$indexrubriks113', '$indexrubriks123', '$indexrubriks133', '$indexrubriks143', '$indexrubriks153', '$indexrubriks163', '$indexrubriks173', '$indexrubriks183', '$indexrubriks193', '$indexrubriks203', '$indexrubriks213');";
		//echo $inserupdaterubriks3;
		$hasilinserupdaterubriks3 = mysql_query($inserupdaterubriks3);
		//echo "tidak ada data";
	}

//untuk sekretaris penguji
$caridatarubriks4 = "SELECT npm,pembimbing FROM indexrubriks WHERE `indexrubriks`.`npm` = '$npm' AND `indexrubriks`.`pembimbing` = 'sekretaris';";
$hasilcariterubriks4 = mysql_query($caridatarubriks4);

$adadata4=mysql_num_rows($hasilcariterubriks4);
	if( $adadata4 == 1)
	{
		//echo "Ada data ".mysql_num_rows($hasilcariterubriks);
		$updaterubriks4 = "UPDATE `indexrubriks` SET `npm` = '$npm', `pembimbing` = 'sekretaris', `sidang` = 'sidang', `index1` = '$indexrubriks14', `index2` = '$indexrubriks24', `index3` = '$indexrubriks34' , `index4` = '$indexrubriks44', `index5` = '$indexrubriks54', `index6` = '$indexrubriks64', `index7` = '$indexrubriks74', `index8` = '$indexrubriks84', `index9` = '$indexrubriks94', `index10` = '$indexrubriks104', `index11` = '$indexrubriks114', `index12` = '$indexrubriks124', `index13` = '$indexrubriks134', `index14` = '$indexrubriks144', `index15` = '$indexrubriks154', `index16` = '$indexrubriks164', `index17` = '$indexrubriks174', `index18` = '$indexrubriks184', `index19` = '$indexrubriks194', `index20` = '$indexrubriks204', `index21` = '$indexrubriks214' WHERE `indexrubriks`.`npm` = '$npm' AND `indexrubriks`.`pembimbing` = 'sekretaris';";
		$hasilupdaterubriks4 = mysql_query($updaterubriks4);
		//echo $updaterubriks4;
	}
	else
	{
		//echo mysql_num_rows($hasilcariterubriks);
		$inserupdaterubriks4 = "INSERT INTO `indexrubriks` (`no`, `npm`, `pembimbing`, `sidang`, `index1`, `index2`, `index3`, `index4`, `index5`, `index6`, `index7`, `index8`, `index9`, `index10`, `index11`, `index12`, `index13`, `index14`, `index15`, `index16`, `index17`, `index18`, `index19`, `index20`, `index21`) VALUES (NULL, '$npm', 'sekretaris','sidang', '$indexrubriks14', '$indexrubriks24', '$indexrubriks34', '$indexrubriks44', '$indexrubriks54', '$indexrubriks64', '$indexrubriks74', '$indexrubriks84', '$indexrubriks94', '$indexrubriks104', '$indexrubriks114', '$indexrubriks124', '$indexrubriks134', '$indexrubriks144', '$indexrubriks154', '$indexrubriks164', '$indexrubriks174', '$indexrubriks184', '$indexrubriks194', '$indexrubriks204', '$indexrubriks214');";
		//echo $inserupdaterubriks4;
		$hasilinserupdaterubriks4 = mysql_query($inserupdaterubriks4);
		//echo "tidak ada data";
	}

//untuk anggota penguji
$caridatarubriks5 = "SELECT npm,pembimbing FROM indexrubriks WHERE `indexrubriks`.`npm` = '$npm' AND `indexrubriks`.`pembimbing` = 'anggota';";
$hasilcariterubriks5 = mysql_query($caridatarubriks5);

$adadata5=mysql_num_rows($hasilcariterubriks5);
	if( $adadata5 == 1)
	{
		//echo "Ada data ".mysql_num_rows($hasilcariterubriks);
		$updaterubriks5 = "UPDATE `indexrubriks` SET `npm` = '$npm', `pembimbing` = 'anggota', `sidang` = 'sidang', `index1` = '$indexrubriks15', `index2` = '$indexrubriks25', `index3` = '$indexrubriks35' , `index4` = '$indexrubriks45', `index5` = '$indexrubriks55', `index6` = '$indexrubriks65', `index7` = '$indexrubriks75', `index8` = '$indexrubriks85', `index9` = '$indexrubriks95', `index10` = '$indexrubriks105', `index11` = '$indexrubriks115', `index12` = '$indexrubriks125', `index13` = '$indexrubriks135', `index14` = '$indexrubriks145', `index15` = '$indexrubriks155', `index16` = '$indexrubriks165', `index17` = '$indexrubriks175', `index18` = '$indexrubriks185', `index19` = '$indexrubriks195', `index20` = '$indexrubriks205', `index21` = '$indexrubriks215' WHERE `indexrubriks`.`npm` = '$npm' AND `indexrubriks`.`pembimbing` = 'anggota';";
		$hasilupdaterubriks5 = mysql_query($updaterubriks5);
		//echo $updaterubriks5;
	}
	else
	{
		//echo mysql_num_rows($hasilcariterubriks);
		$inserupdaterubriks5 = "INSERT INTO `indexrubriks` (`no`, `npm`, `pembimbing`, `sidang`, `index1`, `index2`, `index3`, `index4`, `index5`, `index6`, `index7`, `index8`, `index9`, `index10`, `index11`, `index12`, `index13`, `index14`, `index15`, `index16`, `index17`, `index18`, `index19`, `index20`, `index21`) VALUES (NULL, '$npm', 'anggota','sidang', '$indexrubriks15', '$indexrubriks25', '$indexrubriks35', '$indexrubriks45', '$indexrubriks55', '$indexrubriks65', '$indexrubriks75', '$indexrubriks85', '$indexrubriks95', '$indexrubriks105', '$indexrubriks115', '$indexrubriks125', '$indexrubriks135', '$indexrubriks145', '$indexrubriks155', '$indexrubriks165', '$indexrubriks175', '$indexrubriks185', '$indexrubriks195', '$indexrubriks205', '$indexrubriks215');";
		//echo $inserupdaterubriks5;
		$hasilinserupdaterubriks5 = mysql_query($inserupdaterubriks5);
		//echo "tidak ada data";

	}

//$updaterubriks = "UPDATE `sidang2016`.`indexrubriks` SET `npm` = '$npm', `pembimbing` = 'pb1', `sidang` = 'sidang', `index1` = '$indexrubriks11', `index2` = '$indexrubriks21', `index3` = '$indexrubriks31' , `index4` = '$indexrubriks41', `index5` = '$indexrubriks51', `index6` = '$indexrubriks61', `index7` = '$indexrubriks71', `index8` = '$indexrubriks81', `index9` = '$indexrubriks91', `index10` = '$indexrubriks101', `index11` = '$indexrubriks111', `index12` = '$indexrubriks121', `index13` = '$indexrubriks131', `index14` = '$indexrubriks141', `index15` = '$indexrubriks151', `index16` = '$indexrubriks161', `index17` = '$indexrubriks171', `index18` = '$indexrubriks181', `index19` = '$indexrubriks191', `index20` = '$indexrubriks201', `index21` = '$indexrubriks211' WHERE `indexrubriks`.`npm` = '$npm' AND `indexrubriks`.`pembimbing` = 'pb1';";

//echo $updaterubriks;

//$hasilupdaterubriks = mysql_query($updaterubriks);

?>

<center><a href="jadwal.php">Kembali ke halaman awal </a></center>