<script src="prefixfree.min.js"></script>
	<style>

		/* Clearing floats */
		.cf:before,
		.cf:after {
		    content: " ";
		    display: table;
		}

		.cf:after {
		    clear: both;
		}

		.cf {
		    *zoom: 1;
		}

		/* Mini reset, no margins, paddings or bullets */
		.menu,
		.submenu {
			margin: 0;
			padding: 0;
			list-style: none;
		}

		/* Main level */
		.menu {			
			margin: 50px auto;
			width: 800px;
			/* http://www.red-team-design.com/horizontal-centering-using-css-fit-content-value */
			width: -moz-fit-content;
			width: -webkit-fit-content;
			width: fit-content;	
		}

		.menu > li {
			background: #34495e;
			float: left;
			position: relative;
			transform: skewX(25deg);
		}

		.menu a {
			display: block;
			color: #fff;
			text-transform: uppercase;
			text-decoration: none;
			font-family: Arial, Helvetica;
			font-size: 14px;
		}		

		.menu li:hover {
			background: #e74c3c;
		}		

		.menu > li > a {
			transform: skewX(-25deg);
			padding: 1em 2em;
		}

		/* Dropdown */
		.submenu {
			position: absolute;
			width: 200px;
			left: 50%; margin-left: -100px;
			transform: skewX(-25deg);
			transform-origin: left top;
		}

		.submenu li {
			background-color: #34495e;
			position: relative;
			overflow: hidden;		
		}						

		.submenu > li > a {
			padding: 1em 2em;			
		}

		.submenu > li::after {
			content: '';
			position: absolute;
			top: -125%;
			height: 100%;
			width: 100%;			
			box-shadow: 0 0 50px rgba(0, 0, 0, .9);			
		}		

		/* Odd stuff */
		.submenu > li:nth-child(odd){
			transform: skewX(-25deg) translateX(0);
		}

		.submenu > li:nth-child(odd) > a {
			transform: skewX(25deg);
		}

		.submenu > li:nth-child(odd)::after {
			right: -50%;
			transform: skewX(-25deg) rotate(3deg);
		}				

		/* Even stuff */
		.submenu > li:nth-child(even){
			transform: skewX(25deg) translateX(0);
		}

		.submenu > li:nth-child(even) > a {
			transform: skewX(-25deg);
		}

		.submenu > li:nth-child(even)::after {
			left: -50%;
			transform: skewX(25deg) rotate(3deg);
		}

		/* Show dropdown */
		.submenu,
		.submenu li {
			opacity: 0;
			visibility: hidden;			
		}

		.submenu li {
			transition: .2s ease transform;
		}

		.menu > li:hover .submenu,
		.menu > li:hover .submenu li {
			opacity: 1;
			visibility: visible;
		}		

		.menu > li:hover .submenu li:nth-child(even){
			transform: skewX(25deg) translateX(15px);			
		}

		.menu > li:hover .submenu li:nth-child(odd){
			transform: skewX(-25deg) translateX(-15px);			
		}

        /* Demo only */
        #about {
            margin: 50px 0 0 0;
            color: #444;
            font-family: Arial, Helvetica;
            text-align: center;
        }
        
        #about a {
            color: #777;
        }

	</style>



<?php
// memulai session
session_start();
error_reporting(0);
if (isset($_SESSION['level']))
{
	// jika level admin
	if ($_SESSION['level'] == "admin")
   {   
		//echo "<h1>Ini Halaman Admin Untuk Penguji Ruang : ".$_SESSION['ruang']."</h1>";;
		//echo "Ruang : ".$_SESSION['ruang']."<br>";

?>
<font face="helvetica">
<b><center>Selamat datang di ujian Sidang Usulan Penelitian Tahun ajaran 2015/2016 Gelombang 1<br>
Silahkan pilih menu yang tersedia<br></center></b>
</font>

<ul class="menu cf">
	<li><a href=""></a></li>
	<li><a href=""><?php echo "Ruang : ".$_SESSION['ruang'];?></a></li>
    <li><a href="">Pilih jadwal yang tersedia</a></li>
    <li>
        <a>Gelombang 1</a>
        <ul class="submenu">
			<!-- <li><a href="selasa.php" title="KLIK">Selasa, 27 Desember 2016</a></li> 
            <li><a href="rabu.php" title="KLIK">Rabu, 28 Desember 2016</a></li>  
			<li><a href="kamis.php" title="KLIK">Kamis, 29 Desember 2016</a></li>
            <li><a href="jumat.php" title="KLIK">Jumat, 30 Desember 2016</a></li>
			<li><a href="selasa.php" title="KLIK">Selasa, 3 Januari 2017</a></li> -->
		</ul>         
    </li>
	<li>
        <a href="">Gelombang 2</a>
			<ul class="submenu">
			<li><a href="selasa1.php" title="KLIK">Selasa, 10 Januari 2017</a></li>
			</ul>         
    </li>
	<li>
        <a href="">Susulan</a>
			<ul class="submenu">
			<li><a href="selasa1.php" title="KLIK">Selasa, 30 Mei 2017</a></li>
			</ul>         
    </li>
</ul>

<p id="about"><a href="logout.php">Log Out</a></p>
<?php
   }
   // jika kondisi level user maka akan diarahkan ke halaman lain
   else if ($_SESSION['level'] == "user")
   {
       header('location:user.php');
   }
}
if (!isset($_SESSION['level']))
{
	header('location:index1.php');
}

 ?>


	
</html>

