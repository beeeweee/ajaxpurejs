<?php
//fetch req
// Connect to a database
$conn = mysqli_connect('localhost', 'root', 'root', 'ajaxtest', '8889');


$query = 'SELECT * FROM users';

//Get result
$result = mysqli_query($conn, $query);

//Fetch Data
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($users);