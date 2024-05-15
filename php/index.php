<?php 
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "dbname";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Ulanish hosil qilinmadi: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $phoneNumber = $_POST['pnumber'];
    $email = $_POST['eml'];
    $password = $_POST['pasword'];
    $educationCenter = $_POST['program'];
    $languages = isset($_POST['languages']) ? implode(", ", $_POST['languages']) : "";
    $level = $_POST['level'];
    $startDate = $_POST['start_date'];
    $finishDate = $_POST['finish_date'];
    $file = $_POST['file'];
    $sql = "INSERT INTO users (first_name, last_name, phone_number, email, password, education_center, languages, level, start_date, finish_date, file)
    VALUES ('$firstName', '$lastName', '$phoneNumber', '$email', '$password', '$educationCenter', '$languages', '$level', '$startDate', '$finishDate', '$file')";
    if ($conn->query($sql) === TRUE) {
        echo "Yangi yozuv muvaffaqiyatli saqlandi";
    } else {
        echo "Xatolik yuz berdi: " . $conn->error;
    } }
$conn->close();  
?>
