<?php
include __DIR__ . '/database.php';

$sql = "SELECT * FROM `stanze`";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
// output data of each row
  $arrayRooms = [];
  while($row = $result->fetch_assoc()) {
    $arrayRooms[] = $row;
  }
} elseif ($result) {
  echo "0 results";
} else {
  echo "query error";
}
$conn->close();
?>
