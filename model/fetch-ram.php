<?php 
$connect = new PDO("mysql:host=localhost;dbname=web-shop", "root", "");

$query = "SELECT DISTINCT uredaj_ram FROM uredaji";

$statement = $connect->prepare($query);

$statement->execute();

while($row = $statement->fetch(PDO::FETCH_ASSOC)){
    $data[] = $row;
}

echo json_encode($data);
?>