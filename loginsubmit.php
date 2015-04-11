<?
session_start();
$mysql_host = "mysql5.000webhost.com";
	$mysql_database = "a5703683_m4p";
	$mysql_user = "a5703683_m4p";
	$mysql_password = "5y4r!*3f^#";


$db = mysql_connect($mysql_host,$mysql_user,$mysql_password) or DIE("Connection is down ");
		mysql_select_db($mysql_database) or DIE("Database name not available !!");

		$login = mysql_query("select * from admin where
			(UserName = '" . $_POST['UserName'] . "') and
			(Password = '" . md5($_POST['Password']) . "')",$db);
	$rowcount = mysql_num_rows($login);
	if ($rowcount == 1)
	{
	$_SESSION['UserName'] = $_POST['UserName'];
	header("location: ./edit/index.php");

	}
	else
	{
	
	echo "<font face=verdana size=2 color=red> <blink><center><b> Maaf UserName atau Password anda salah </b></center></blink> "  ;
	include "login.php";
	//header("Location: index.php");
	}
?>