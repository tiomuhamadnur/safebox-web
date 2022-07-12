 <?php

 include_once 'configDB.php';

$sql = "SELECT status FROM data_absen ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "" . $row["status"]."" ;
  }
} else {
  echo "0 results";
}
$conn->close();
?> 