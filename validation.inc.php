<?php

$name = $email = $gender = $comment = $website = "";

$nameErr = $emailErr = $genderErr = $websiteErr = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (empty($_POST["name"])) $nameErr = "Name is required";
    else $name = test_input($_POST["name"]);

    if (empty($_POST["email"])) $emailErr = "Email is required";    
    $email = test_input($_POST["email"]);

    if (empty($_POST["website"])) $websiteErr = "Website url is required";
    else $website = test_input($_POST["website"]);

    if (empty($_POST["gender"])) $genderErr = "Gender is Required";
    else $gender = test_input($_POST["gender"]);

    $comment = test_input($_POST["comment"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}