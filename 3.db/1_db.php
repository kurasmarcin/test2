<!DOCTYPE html>
<html lang="pl" dir="ltr">
    <head>
        <meta charset="utf-8">
    </head>
<body>
<h4> uzytkownicy z bazy</h4>

<?php
require_once '../scripts/connect.php';
$sql = "SELECT * FROM `users`;";
$result = $conn->query($sql);
//$user = $result->fetch_assoc();
//echo $user["firstName"];
while ($user = $result->fetch_assoc()){
echo <<< USER
$user[firstName]
$user[lastName]
USER;

}
$conn->close();
?>

</body>

</html>