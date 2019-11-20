<?php

/**
 *
 * basic mysqli connection test
 *
 **/

$srv = "squid.emerge2.com";
$usr = "e2_joelgames_li";
$psw = "mezUprucrej-8esw";

// establish connection
$con = mysqli_connect($srv, $usr, $psw);

// check for error
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// success
echo "Connected successfully";
?>