<?php 

// collecting data from form

$first_name = $_POST['first_name'];

$last_name = $_POST['last_name'];

$email = $_POST['email'];

$department = $_POST['depart'];

$password = $_POST['pass'];

$gender = $_POST['gender'];

$designation = $_POST['designation'];

$error = [];

//verifying the data

if ($first_name == "") {

    $error = "first_name cannot be blank";

}
if ($last_name == "") {

    $error = "last_name cannot be blank";

}
if ($email == "") {

    $error = "email cannot be blank";

}
if ($department == "") {

    $error = "department cannot be blank";

}
if ($password == "") {

    $error = "password cannot be blank";

}
print_r($error);

//saving data to folder


//returning back to page





?>