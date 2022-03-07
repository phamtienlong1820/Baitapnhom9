<?php
$conn=new PDO('mysql:host=sql210.epizy.com;dbname=epiz_31225082_fake_db;charset=utf8','epiz_31225082','j7TC7sdlLp');
$data = $conn->query("select id, name, email, phone from user_fake");
$d = $data->fetchAll();
$rows=array();
foreach ($d as $row) {
	$rows[]=array(
		"id"=>$row['id'],
		"name"=>$row['name'],
		"email"=>$row['email'],
		"phone"=>$row['phone'],
	);
}
echo json_encode($rows);
?>