<?php

if (isset($_POST['name'])) {
    $name = htmlspecialchars($_POST['name']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $content = htmlspecialchars($_POST['content']);
    $insert = "INSERT INTO `contact`(`lastname`, `firstname`, `email`, `content`, `phone`) VALUES (:lastname, :firstname, :email, :content, :phone)";
    $test = $dbh->prepare($insert);
    $test->execute([':lastname' => $name, ':firstname' => $firstname, ':email' => $email, ':phone' => $phone, ':content' => $content]);
}