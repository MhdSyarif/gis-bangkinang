<?PHP
	$mysql_host = "mysql5.000webhost.com";
	$mysql_database = "a5703683_m4p";
	$mysql_user = "a5703683_m4p";
	$mysql_password = "5y4r!*3f^#";

	$koneksi = mysql_connect($mysql_host,$mysql_user,$mysql_password)
			   or die ("Koneksi gagal".mysql_error());
	mysql_select_db($mysql_database, $koneksi)
	     or die ("Baca DB gagal".mysql_error());

?>