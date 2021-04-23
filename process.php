<?php

echo 'processing....';

//Check for get variable
/// will need security variables for security - must learn
if(isset($_GET['name'])){
    echo 'GET: Your name is '. $_GET['name'];

}