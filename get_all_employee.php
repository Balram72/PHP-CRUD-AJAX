<?php   
include_once "./config.php";

$q = mysqli_query($conn,"SELECT * FROM employee ORDER BY id DESC");
$json = array();
while($data = mysqli_fetch_array($q)){
    $json[] = $data;
}
$record["userdata"] = $json;
echo json_encode($record);

?>