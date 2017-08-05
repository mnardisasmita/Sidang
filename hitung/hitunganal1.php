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
<!DOCTYPE html>
<html>
<body>
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

$npm = check_input($_REQUEST["npm"]);
$pb1ket = check_input($_REQUEST["pb1ket"]);
$pb2ket = check_input($_REQUEST["pb2ket"]);
//echo "Tanggal = ".$tgl."<br>";


//form mulai dibawah
?>

<script>
function validate(form) {

    // validation code here ...


    if(!valid) {
        alert('Please correct the errors in the form!');
        return false;
    }
    else {
        return confirm('Do you really want to submit the form?');
    }
}
</script>

<!DOCTYPE html>
<FORM onsubmit="return confirm('Data akan dimasukan, dan tidak bisa dirubah, apakah anda yakin, bila ya, tekan tombol OK, pastikan tidak ada perbedaan lebih dari 10 diantara nilai antar penguji');" NAME="hitungnilai" ACTION="prosesnilai.php" method="post">
<center><table BORDER CELLPADDING=1 height="10px" class="fixed">
<tr BGCOLOR="#99CCFF" height="10px">
	<td colspan="2"></td>
	<td><center>Pembimbing 1</center></td>
	<td ><center><?php echo $pb1ket;?></center></td>
	<td colspan="2"><center>Pembimbing 2</center></td>
	<td ><center><?php echo $pb2ket;?></center></td>
	<td colspan="3"><center>Ketua</center></td>
	<td colspan="3"><center>Sekretaris</center></td>
	<td colspan="3"><center>Anggota</center></td>
	<td colspan="3"><input type="hidden" name="npm" value="<?php echo $npm; ?>"><center><?php echo $npm;?></center></td>
</tr>

<tr BGCOLOR="#FFFFCC">
	<td><center>No.</center></td>
	<td><center>Index</center></td>
	<td><center>Skala 1-4</center></td>
	<td><center>Total</center></td>
	<td><center>No.</center></td>
	<td><center>Skala 1-4</center></td>
	<td><center>Total</center></td>
	<td><center>No.</center></td>
	<td><center>Skala 1-4</center></td>
	<td><center>Total</center></td>
	<td><center>No.</center></td>
	<td><center>Skala 1-4</center></td>
	<td><center>Total</center></td>
	<td><center>No.</center></td>
	<td><center>Skala 1-4</center></td>
	<td><center>Total</center></td>
	<td><center>Total Index</center></td>
</tr>

<tr height="10px">
	<td><center>1</center></td>
	<td><center>4</center></td>
<?php
$idvar=11;
$tabindex=1;
while ($idvar<=15)
{?>		<td ALIGN=CENTER>
		<input type="number" size ="1" name="indexrubriks<?php echo$idvar;?>" min="0" max="4" id="nilai<?php echo $idvar; ?>" onchange="nilaiindex('ntotalindex')"  placeholder="1-4"  tabindex="<?php echo $tabindex; ?>">
		</td>
		<td ALIGN=CENTER><p id="n<?php echo $idvar; ?>index"></p></td>
					<td><center>1</center></td>
<?php
	//echo"$tabindex";
	$idvar++;
	$tabindex=$tabindex+100;
 }
?>
	<td ALIGN=CENTER><p id="ntotalindex1"></p></td>
</tr>

<tr>
	<td><center>2</center></td>
	<td><center>5</center></td>
<?php
$idvar=21;
$tabindex=2;
while ($idvar<=25)
{?>		<td ALIGN=CENTER>
		<input type="number" size ="1" name="indexrubriks<?php echo$idvar;?>" min="0" max="4" id="nilai<?php echo $idvar; ?>" onchange="nilaiindex('ntotalindex')"  placeholder="1-4"	 tabindex="<?php echo $tabindex; ?>">
		</td>
		<td ALIGN=CENTER><p id="n<?php echo $idvar; ?>index"></p></td>
			<td><center>2</center></td>
<?php
	//echo"$tabindex";
	$idvar++;
	$tabindex=$tabindex+100;
 }
?>
	<td ALIGN=CENTER><p id="ntotalindex2"></p></td>
</tr>

<tr>
	<td><center>3</center></td>
	<td><center>5</center></td>
<?php
$idvar=31;
$tabindex=3;
while ($idvar<=35)
{?>		<td ALIGN=CENTER>
		<input type="number" size ="1" name="indexrubriks<?php echo$idvar;?>" min="1" max="4" id="nilai<?php echo $idvar; ?>" onchange="nilaiindex('ntotalindex')"  placeholder="1-4" tabindex="<?php echo $tabindex; ?>">
		</td>
		<td ALIGN=CENTER><p id="n<?php echo $idvar; ?>index"></p></td>
			<td><center>3</center></td>
<?php
	//echo"$idvar";
	$idvar++;
	$tabindex=$tabindex+100;
 }
?>
	<td ALIGN=CENTER><p id="ntotalindex3"></p></td>
</tr>

<tr>
	<td><center>4</center></td>
	<td><center>3</center></td>
<?php
$idvar=41;
$tabindex=4;
while ($idvar<=45)
{?>		<td ALIGN=CENTER>
		<input type="number" size ="1" name="indexrubriks<?php echo$idvar;?>" min="1" max="4" id="nilai<?php echo $idvar; ?>" onchange="nilaiindex('ntotalindex')"  placeholder="1-4" tabindex="<?php echo $tabindex; ?>">
		</td>
		<td ALIGN=CENTER><p id="n<?php echo $idvar; ?>index"></p></td>
			<td><center>4</center></td>

<?php
	//echo"$idvar";
	$idvar++;
	$tabindex=$tabindex+100;
 }
?>
	<td ALIGN=CENTER><p id="ntotalindex4"></p></td>
</tr>

<tr>
	<td><center>5</center></td>
	<td><center>4</center></td>
<?php
$idvar=51;
$tabindex=5;
while ($idvar<=55)
{?>		<td ALIGN=CENTER>
		<input type="number" size ="1" name="indexrubriks<?php echo$idvar;?>" min="1" max="4" id="nilai<?php echo $idvar; ?>" onchange="nilaiindex('ntotalindex')"  placeholder="1-4" tabindex="<?php echo $tabindex; ?>">
		</td>
		<td ALIGN=CENTER><p id="n<?php echo $idvar; ?>index"></p></td>
			<td><center>5</center></td>
<?php
	//echo"$idvar";
	$idvar++;
	$tabindex=$tabindex+100;
 }
?>
	<td ALIGN=CENTER><p id="ntotalindex5"></p></td>
</tr>

<tr>
	<td><center>6</center></td>
	<td><center>5</center></td>
<?php
$idvar=61;
$tabindex=6;
while ($idvar<=65)
{?>		<td ALIGN=CENTER>
		<input type="number" size ="1" name="indexrubriks<?php echo$idvar;?>" min="1" max="4" id="nilai<?php echo $idvar; ?>" onchange="nilaiindex('ntotalindex')"  placeholder="1-4" tabindex="<?php echo $tabindex; ?>">
		</td>
		<td ALIGN=CENTER><p id="n<?php echo $idvar; ?>index"></p></td>
			<td><center>6</center></td>
<?php
	//echo"$idvar";
	$idvar++;
	$tabindex=$tabindex+100;
 }
?>
	<td ALIGN=CENTER><p id="ntotalindex6"></p></td>
</tr>

<tr>
	<td><center>7</center></td>
	<td><center>5</center></td>
<?php
$idvar=71;
$tabindex=7;
while ($idvar<=75)
{?>		<td ALIGN=CENTER>
		<input type="number" size ="1" name="indexrubriks<?php echo$idvar;?>" min="1" max="4" id="nilai<?php echo $idvar; ?>" onchange="nilaiindex('ntotalindex')"  placeholder="1-4" tabindex="<?php echo $tabindex; ?>">
		</td>
		<td ALIGN=CENTER><p id="n<?php echo $idvar; ?>index"></p></td>
			<td><center>7</center></td>
<?php
	//echo"$idvar";
	$idvar++;
	$tabindex=$tabindex+100;
 }
?>
	<td ALIGN=CENTER><p id="ntotalindex7"></p></td>
</tr>

<tr>
	<td><center>8</center></td>
	<td><center>5</center></td>
<?php
$idvar=81;
$tabindex=8;
while ($idvar<=85)
{?>		<td ALIGN=CENTER>
		<input type="number" size ="1" name="indexrubriks<?php echo$idvar;?>" min="1" max="4" id="nilai<?php echo $idvar; ?>" onchange="nilaiindex('ntotalindex')"  placeholder="1-4" tabindex="<?php echo $tabindex; ?>">
		</td>
		<td ALIGN=CENTER><p id="n<?php echo $idvar; ?>index"></p></td>
			<td><center>8</center></td>
<?php
	//echo"$idvar";
	$idvar++;
	$tabindex=$tabindex+100;
 }
?>
	<td ALIGN=CENTER><p id="ntotalindex8"></p></td>
</tr>

<tr>
	<td><center>9</center></td>
	<td><center>3</center></td>
<?php
$idvar=91;
$tabindex=9;
while ($idvar<=95)
{?>		<td ALIGN=CENTER>
		<input type="number" size ="1" name="indexrubriks<?php echo$idvar;?>" min="1" max="4" id="nilai<?php echo $idvar; ?>" onchange="nilaiindex('ntotalindex')"  placeholder="1-4" tabindex="<?php echo $tabindex; ?>">
		</td>
		<td ALIGN=CENTER><p id="n<?php echo $idvar; ?>index"></p></td>
			<td><center>9</center></td>
<?php
	//echo"$idvar";
	$idvar++;
	$tabindex=$tabindex+100;
 }
?>
	<td ALIGN=CENTER><p id="ntotalindex9"></p></td>
</tr>

<tr>
	<td><center>10</center></td>
	<td><center>5</center></td>
<?php
$idvar=101;
$tabindex=10;
while ($idvar<=105)
{?>	<td ALIGN=CENTER>
		<input type="number" size ="1" name="indexrubriks<?php echo$idvar;?>" min="1" max="4" id="nilai<?php echo $idvar; ?>" onchange="nilaiindex('ntotalindex')"  placeholder="1-4" tabindex="<?php echo $tabindex; ?>">
		</td>
		<td ALIGN=CENTER><p id="n<?php echo $idvar; ?>index"></p></td>
			<td><center>10</center></td>
<?php
	//echo"$tabindex";
	$idvar++;
	$tabindex=$tabindex+100;
 }
?>
	<td ALIGN=CENTER><p id="ntotalindex10"></p></td>
</tr>

<tr>
	<td><center>11</center></td>
	<td><center>5</center></td>
<?php
$idvar=111;
$tabindex=11;
while ($idvar<=115)
{?>	<td ALIGN=CENTER>
		<input type="number" size ="1" name="indexrubriks<?php echo$idvar;?>" min="1" max="4" id="nilai<?php echo $idvar; ?>" onchange="nilaiindex('ntotalindex')"  placeholder="1-4" tabindex="<?php echo $tabindex; ?>">
		</td>
		<td ALIGN=CENTER><p id="n<?php echo $idvar; ?>index"></p></td>
			<td><center>11</center></td>
<?php
	//echo"$idvar";
	$idvar++;
	$tabindex=$tabindex+100;
 }
?>
	<td ALIGN=CENTER><p id="ntotalindex11"></p></td>
</tr>

<tr>
	<td><center>12</center></td>
	<td><center>3</center></td>
<?php
$idvar=121;
$tabindex=12;
while ($idvar<=125)
{?>		<td ALIGN=CENTER>
		<input type="number" size ="1" name="indexrubriks<?php echo$idvar;?>" min="1" max="4" id="nilai<?php echo $idvar; ?>" onchange="nilaiindex('ntotalindex')"  placeholder="1-4" tabindex="<?php echo $tabindex; ?>">
		</td>
		<td ALIGN=CENTER><p id="n<?php echo $idvar; ?>index"></p></td>
			<td><center>12</center></td>
<?php
	//echo"$idvar";
	$idvar++;
	$tabindex=$tabindex+100;
 }
?>
	<td ALIGN=CENTER><p id="ntotalindex12"></p></td>
</tr>

<tr>
	<td><center>13</center></td>
	<td><center>3</center></td>
<?php
$idvar=131;
$tabindex=13;
while ($idvar<=135)
{?>		<td ALIGN=CENTER>
		<input type="number" size ="1" name="indexrubriks<?php echo$idvar;?>" min="1" max="4" id="nilai<?php echo $idvar; ?>" onchange="nilaiindex('ntotalindex')"  placeholder="1-4" tabindex="<?php echo $tabindex; ?>">
		</td>
		<td ALIGN=CENTER><p id="n<?php echo $idvar; ?>index"></p></td>
			<td><center>13</center></td>
<?php
	//echo"$idvar";
	$idvar++;
	$tabindex=$tabindex+100;
 }
?>
	<td ALIGN=CENTER><p id="ntotalindex13"></p></td>
</tr>

<tr>
	<td><center>14</center></td>
	<td><center>3</center></td>
<?php
$idvar=141;
$tabindex=14;
while ($idvar<=145)
{?>		<td ALIGN=CENTER>
		<input type="number" size ="1" name="indexrubriks<?php echo$idvar;?>" min="1" max="4" id="nilai<?php echo $idvar; ?>" onchange="nilaiindex('ntotalindex')"  placeholder="1-4" tabindex="<?php echo $tabindex; ?>">
		</td>
		<td ALIGN=CENTER><p id="n<?php echo $idvar; ?>index"></p></td>
			<td><center>14</center></td>
<?php
	//echo"$idvar";
	$idvar++;
	$tabindex=$tabindex+100;
 }
?>
	<td ALIGN=CENTER><p id="ntotalindex14"></p></td>
</tr>

<tr>
	<td><center>15</center></td>
	<td><center>4</center></td>
<?php
$idvar=151;
$tabindex=15;
while ($idvar<=155)
{?>		<td ALIGN=CENTER>
		<input type="number" size ="1" name="indexrubriks<?php echo$idvar;?>" min="1" max="4" id="nilai<?php echo $idvar; ?>" onchange="nilaiindex('ntotalindex')"  placeholder="1-4" tabindex="<?php echo $tabindex; ?>">
		</td>
		<td ALIGN=CENTER><p id="n<?php echo $idvar; ?>index"></p></td>
			<td><center>15</center></td>
<?php
	//echo"$idvar";
	$idvar++;
	$tabindex=$tabindex+100;
 }
?>
	<td ALIGN=CENTER><p id="ntotalindex15"></p></td>
</tr>

<tr>
	<td><center>16</center></td>
	<td><center>5</center></td>
<?php
$idvar=161;
$tabindex=16;
while ($idvar<=165)
{?>		<td ALIGN=CENTER>
		<input type="number" size ="1" name="indexrubriks<?php echo$idvar;?>" min="1" max="4" id="nilai<?php echo $idvar; ?>" onchange="nilaiindex('ntotalindex')"  placeholder="1-4" tabindex="<?php echo $tabindex; ?>">
		</td>
		<td ALIGN=CENTER><p id="n<?php echo $idvar; ?>index"></p></td>
			<td><center>16</center></td>
<?php
	//echo"$idvar";
	$idvar++;
	$tabindex=$tabindex+100;
 }
?>
	<td ALIGN=CENTER><p id="ntotalindex16"></p></td>
</tr>

<tr>
	<td><center>17</center></td>
	<td><center>4</center></td>
<?php
$idvar=171;
$tabindex=17;
while ($idvar<=175)
{?>		<td ALIGN=CENTER>
		<input type="number" size ="1" name="indexrubriks<?php echo$idvar;?>" min="1" max="4" id="nilai<?php echo $idvar; ?>" onchange="nilaiindex('ntotalindex')"  placeholder="1-4" tabindex="<?php echo $tabindex; ?>">
		</td>
		<td ALIGN=CENTER><p id="n<?php echo $idvar; ?>index"></p></td>
			<td><center>17</center></td>
<?php
	//echo"$idvar";
	$idvar++;
	$tabindex=$tabindex+100;
 }
?>
	<td ALIGN=CENTER><p id="ntotalindex17"></p></td>
</tr>

<tr>
	<td><center>18</center></td>
	<td><center>5</center></td>
<?php
$idvar=181;
$tabindex=18;
while ($idvar<=185)
{?>		<td ALIGN=CENTER>
		<input type="number" size ="1" name="indexrubriks<?php echo$idvar;?>" min="1" max="4" id="nilai<?php echo $idvar; ?>" onchange="nilaiindex('ntotalindex')"  placeholder="1-4" tabindex="<?php echo $tabindex; ?>">
		</td>
		<td ALIGN=CENTER><p id="n<?php echo $idvar; ?>index"></p></td>
			<td><center>18</center></td>
<?php
	//echo"$idvar";
	$idvar++;
	$tabindex=$tabindex+100;
 }
?>
	<td ALIGN=CENTER><p id="ntotalindex18"></p></td>
</tr>


</tr>

<tr>
	<td colspan="2">Total Nilai</td>
	<td ></td>
	<td ALIGN=CENTER><p id="ntotalPB1"></p></td>
	<td colspan="2"></td>
	<td ALIGN=CENTER><p id="ntotalPB2"></p></td>
	<td colspan="2"></td>
	<td ALIGN=CENTER><p id="ntotalK"></td>
	<td colspan="2"></td>
	<td ALIGN=CENTER><p id="ntotalS"></td>
	<td colspan="2"></td>
	<td ALIGN=CENTER><p id="ntotalA"></td>
	<td colspan="4">Total Nilai Semua</td>
</tr>

<tr >
	<td colspan="3">Nilai Akhir</td>
	<td BGCOLOR="00ff1e" ALIGN=CENTER><p id="ntotalPB1A"></p></td>
	<td colspan="2"></td>
	<td BGCOLOR="00ff1e" ALIGN=CENTER><p id="ntotalPB2A"></p></td>
	<td colspan="2"></td>
	<td BGCOLOR="00ff1e" ALIGN=CENTER><p id="ntotalKA"></td>
	<td colspan="2"></td>
	<td BGCOLOR="00ff1e" ALIGN=CENTER><p id="ntotalSA"></td>
	<td colspan="2"></td>
	<td BGCOLOR="00ff1e" ALIGN=CENTER><p id="ntotalAA"></td>
	<td colspan="4" BGCOLOR="00ff1e" ALIGN=CENTER><p id="ntotalAkhir"></td>
</tr>

</table></center>


<script type="text/javascript" src="hitunganal1.js"></script>

<center><table BORDER CELLPADDING=1 height="10px">
<tr ALIGN=CENTER width="10px">
	<td>PB1</td>
	<td>PB2</td>
	<td>Ketua</td>
	<td>Sekretaris</td>
	<td>Anggota</td>
	<td><input type="button" id="btnHitung" value="Hitung" onclick="hitungSementara();"></td>
</tr>
<tr ALIGN=CENTER width="10px">
	<td><input type="number" min="0" max="100" step="any" id="PB1" name="PB1" placeholder="Masukan nilai 0-100" /></td>
	<td><input type="number" min="0" max="100" step="any" id="PB2" name="PB2" placeholder="Masukan nilai 0-100" /></td>
	<td><input type="number" min="0" max="100" step="any" id="KETUA" name="KETUA" placeholder="Masukan nilai 0-100" /></td>
	<td><input type="number" min="0" max="100" step="any" id="SEKRETARIS" name="SEKRETARIS" placeholder="Masukan nilai 0-100" /></td>
	<td><input type="number" min="0" max="100" step="any" id="ANGGOTA" name="ANGGOTA" placeholder="Masukan nilai 0-100" /></td>
	<td> <input type="text" id="hasil" name="hasil"></td>
</tr>
</table></center>

<P><center>

<input type="hidden" name="pb1ket" value="<?php echo $pb1ket; ?>">
<input type="hidden" name="pb2ket" value="<?php echo $pb2ket; ?>">
<input type="hidden" name="ketket" value="<?php echo $ketket; ?>">
<input type="hidden" name="sekket" value="<?php echo $sekket; ?>">
<input type="hidden" name="angket" value="<?php echo $angket; ?>">
<input type="hidden" name="keteranganpb" value="pb1no">
<INPUT TYPE=SUBMIT VALUE="Masukan Data"><center>

<?php
/*
if ($pb1ket=="tidak")
	{
	  echo "Apabila Pembimbing 1 Tidak hadir dan tidak ada pengganti, opsi 18-21 harap tidak dipilih atau dibiarkan dalam keadaan 'silahkan dipilih 1-4' <br>";
	}
else
	{
		//echo "ada loh<br>";
	}

if ($pb2ket=="tidak")
	{
	  echo "Apabila Pembimbing 2 Tidak hadir dan tidak ada pengganti, opsi 18-21 harap tidak dipilih atau dibiarkan dalam keadaan 'silahkan dipilih 1-4' <br>";
	}
else
	{
	}
*/
?>

</FORM>

</body>
</html>


