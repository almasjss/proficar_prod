<?php
$con = mysqli_connect('localhost', 'root', '','proficar');
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];

        $sql = "INSERT INTO `contact` (`id`, `fullName`, `email`, `phone`, `message`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage');";
        $rs = mysqli_query($con, $sql);
    if ($rs) {
        echo "Contact Records Inserted";
    }

header("Location:index.html");
