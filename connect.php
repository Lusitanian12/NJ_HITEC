<?php
include("account.php");

$dbh = mysql_connect ( $hostname, $username, $password )
	           or die ( "Unable to connect to MySQL database" );
print "Connected to MySQL<br>";
mysql_select_db( $project );

?>
