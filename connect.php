<?php
$conn = new PDO("mysql:host=localhost;dbname=fantasy", "root", "");
$sql = "SELECT * FROM league";
$stmt = $conn->prepare($sql);
$stmt->execute();
echo 'League: <br />';
while ($row = $stmt->fetch())
{ echo '----------------------------------------<br />';
echo $row["league_name"] . ' ';
echo $row["commissioner"] . '<br />';
}
?>