<?php
	require_once("./_include/fg_membersite.php");


	$fgmembersite = new FGMembersite();

	$fgmembersite->SetWebsiteName('user11.com');
	$fgmembersite->SetAdminEmail('user11@user11.com');
	$fgmembersite->InitDB(/*hostname*/'localhost',
	                      /*username*/'japan',
	                      /*password*/'j@pan',
	                      /*database name*/'shop',
	                      /*table name*/'admin');

	$fgmembersite->SetRandomKey('qSRcVS6DrTzrPvr');



	$mysql_hostname = "localhost";
	$mysql_user = "japan";
	$mysql_password = "j@pan";
	$mysql_database = "shop";
	$mysql_set_charset = "utf8";

	// Create connection


	$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);
	
	// Check connection
	if (!$bd) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	
?>