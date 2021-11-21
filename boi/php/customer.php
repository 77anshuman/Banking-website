<?php
$conn = mysqli_connect("localhost", "root", "", "boi");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}



$result = mysqli_query($conn, "SELECT * FROM customer");

$data = array();
while ($row = mysqli_fetch_object($result))
{
    array_push($data, $row);
}

echo json_encode($data);
exit();
?>