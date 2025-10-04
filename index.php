<?php
$private_ip = $_SERVER['SERVER_ADDR'];        // Private IP of the instance
$hostname   = gethostname();                  // Hostname
$public_ip  = trim(file_get_contents('http://checkip.amazonaws.com/')); // Public IP
?>
<!DOCTYPE html>
<html>
<head>
    <title>EC2 Instance Info</title>
</head>
<body>
    <h1>EC2 Instance Info</h1>
    <p><strong>Private IP:</strong> <?= $private_ip ?></p>
    <p><strong>Public IP:</strong> <?= $public_ip ?></p>
    <p><strong>Hostname:</strong> <?= $hostname ?></p>
</body>
</html>
