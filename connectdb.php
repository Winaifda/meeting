<? 
date_default_timezone_set("Asia/Bangkok");
$objConnect = mysql_connect("localhost","root","123456") or die("Error Connect to Database");
$objDB = mysql_select_db("meeting");
mysql_query("SET NAMES UTF8");
?>