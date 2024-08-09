<?php
$con = mysqli_connect('localhost','root');

if($con) {
    echo "Connection Successful";
}
else {
    echo "Connection Failed";
}

mysqli_select_db($con, 'photos');

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];

$query = "INSERT INTO contact (name, email, number) VALUES ('$name', '$email', $number)";

mysqli_query($con, $query);
header('location:index.php#contact');
?>





