<?php
// Sample array
$data = array("a" => "Apple", "b" => "Ball", "c" => "Cat");

header("Content-Type: application/json");
echo json_encode($data);
exit();
?>