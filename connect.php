<?PHP
	$mysql_host = "127.0.0.1";
	$mysql_database = "gis-bangkinang";
	$mysql_user = "root";
	$mysql_password = "";

	$koneksi = mysql_connect($mysql_host,$mysql_user,$mysql_password)
			   or die ("Koneksi gagal".mysql_error());
	mysql_select_db($mysql_database, $koneksi)
	     or die ("Baca DB gagal".mysql_error());

?>
