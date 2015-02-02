<?php
require 'ftp.php';
$config = array();
$ftp = new ftp($config);
$hostname="";
$ftp_user="";
$ftp_pass="";
$ftp->conn($hostname, $ftp_user, $ftp_pass);

$ftp->put(Destination, source_folder);
