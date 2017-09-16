<?php
// read the .ini file and create an associative array

$db = parse_ini_file("config.ini");

/* now we can use the info in that file to create the appropriate, string connection, based on type, or just using the other info */

$user = $db['user'];
$pass = $db['pass'];
$name = $db['name'];
$host = $db['host'];
$type = $db['type'];
$type = $db['server'];
$type = $db['ldap'];
$type = $db['email'];
$type = $db['log'];

echo "$user\n";
echo "$pass\n";
echo "$name\n";
echo "$host\n";
echo "$type\n";
echo "$server\n";
echo "$ldap\n";
echo "$email\n";
echo "$log\n";
