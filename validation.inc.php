<?php

$name = $email = $gender = $comment = $website = "";

$nameErr = $emailErr = $genderErr = $websiteErr = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    }
    else {
        $name = test_input($_POST["name"]);
        if(!preg_match("/[a-zA-Z][a-zA-Z0-9-_]{3,32}/", $name)) $nameErr = "Only letters and white space allowed";
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $emailErr = "Invalid email format";
    }

    if (empty($_POST["website"])) {
        $websiteErr = "Website url is required";   
    } else {
        $website = test_input($_POST["website"]);
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) $websiteErr = "Invalid URL";
    }
    
    if (empty($_POST["comment"])) $comment = "";
    else $comment = test_input($_POST["comment"]);

    if (empty($_POST["gender"])) $genderErr = "Gender is Required";
    else $gender = test_input($_POST["gender"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}