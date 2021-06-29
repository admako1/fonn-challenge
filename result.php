<?php
echo 'System check:';
echo "<br>";

$host = 'mysql';
$user = getenv('MYSQL_USER');
$pass = getenv('MYSQL_PASSWORD');

echo 'Nginx & PHP setup: '.PHP_EOL;
echo '<i style="color:green;">
  OK</i> ';
echo "<br>";

$conn = mysqli_connect($host, $user, $pass);
if (!$conn) {
    echo 'Database connection: '.PHP_EOL;
    echo '<i style="color:red;">
      FAIL</i> ';
} else {
    echo 'Database connection: '.PHP_EOL;
    echo '<i style="color:green;">
      OK</i> ';
}
?>
