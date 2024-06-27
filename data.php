<?php
$connect = mysqli_connect("MySQL-8.2", "root", "", "Vocabulary");
$value = $_POST['en'];
$result = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM Words WHERE en_name = '$value'"));
echo json_encode(['result' => $result,]);