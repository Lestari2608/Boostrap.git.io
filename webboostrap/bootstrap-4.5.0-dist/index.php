<?php
if(isset($_GET['page'])){
	$page = $_GET['page'];
}else{
	$page ="home";
}

switch($page){
	case"home";
		include "header.php";
		include "navigasi.php";
		include "home.php";
		include "footer.php";
break;

	case"menumakanan";
		include "header.php";
		include "navigasi.php";
		include "menumakanan.php";
		include "footer.php";
break;
	case"kontak";
		include "header.php";
		include "navigasi.php";
		include "kontak.php";
		include "footer.php";
break;
case"stok";
		include "header.php";
		include "navigasi.php";
		include "stok.php";
		include "footer.php";
break;
}