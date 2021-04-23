<?php

// Connect to a database
$conn = mysqli_connect('localhost', 'root', 'root', 'ajaxtest', '8889');

echo 'processing....';


//Check for get variable
/// will need security variables for security - must learn
if(isset($_POST['name'])){
    //for security
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    echo 'POST: Your name is '. $_POST['name'];

    $query = "INSERT INTO users(name) VALUES('$name')";

    if(mysqli_query($conn, $query)){
        echo " User Added...";
    } else {
        echo 'Error :'. mysqli_error($conn);
    }

}

//Check for get variable
/// will need security variables for security - must learn
if(isset($_GET['name'])){
    echo 'GET: Your name is '. $_GET['name'];

}