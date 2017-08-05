<?php
// konek ke db script
include 'konak.php';

//halaman format penilaian
//include 'proyekhitung1.php';

$pb1ket = $_REQUEST["pb1ket"];
$pb2ket = $_REQUEST["pb2ket"];

//echo $pb1ket;

if ($pb1ket == "tidak")
{	
	echo "Pembimbing 1 tidak hadir";
	include 'hitung1.php';
	
}
elseif ($pb2ket =="tidak")
{
	echo "Pembimbing 2 Tidak hadir";
	include 'hitung2.php';

}
else
{
		include 'proyekhitung1.php';
}

?>