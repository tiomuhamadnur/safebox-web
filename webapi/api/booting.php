 <?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


include_once 'configDB.php';


$sql = "SELECT uid, status, tanggal FROM data_absen  ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $uid =  $row["uid"];
    $status = $row["status"];
    $tanggal = $row["tanggal"];
    $ngaran = "SELECT nama FROM data_karyawan  WHERE uid = '" . $row["uid"]."'";
    $hasil = $conn->query($ngaran);

    $name = $hasil->fetch_assoc();
    $nama = $name["nama"];

    // echo $uid; 
    // echo $nama;
    $ArrData = array("uid"=>$uid, "nama"=>$nama, "status"=>$status, "tanggal"=>$tanggal);

    $DataArray = json_encode($ArrData);
    echo $DataArray;
  }
} else {
  echo "0 results";
}
$conn->close();
?> 