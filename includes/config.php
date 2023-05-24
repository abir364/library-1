<?php 
// DB credentials.
define('DB_HOST','192.168.20.65');
define('DB_USER','librarian');
define('DB_PASS','ecompassword');
define('DB_NAME','librarypass');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
