<?php
$metadata_base = "http://169.254.169.254/latest/meta-data/";

$private_ip = file_get_contents($metadata_base . "local-ipv4");
$public_ip  = file_get_contents($metadata_base . "public-ipv4");
$hostname   = file_get_contents($metadata_base . "hostname");
?>

<!DOCTYPE html>
<html>
<head>
    <title>EC2 Instance Info</title>
</head>
<body>
    <h1>EC2 Instance Info</h1>
    <p><strong>Private IP:</strong> <?php echo $private_ip; ?></p>
    <p><strong>Public IP:</strong> <?php echo $public_ip; ?></p>
    <p><strong>Hostname:</strong> <?php echo $hostname; ?></p>
</body>
</html>
