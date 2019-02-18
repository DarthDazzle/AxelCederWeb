<?php 
   
define('DB_NAME', 'cykelmap');
define('DB_USER', 'root');
define('DB_PASSWORD', 'Jzx62McwBn6eUqvM');
define('DB_HOST', 'localhost');

$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if ($mysqli->connect_errno) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}


$result = $mysqli->query("SELECT * FROM entries");

header("Content-type: text/xml");

while ($row = $result->fetch_row()) {
  $node = $dom->createElement("marker");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("id",$row[0]);
  $newnode->setAttribute("time",$row[1]);
  $newnode->setAttribute("comment", $row[4]);
  $newnode->setAttribute("plate", $row[3]);
  $newnode->setAttribute("location", $row[2]);
  $newnode->setAttribute("lat", $row[5]);
  $newnode->setAttribute("lng", $row[6]);
}
echo $dom->saveXML();
?>