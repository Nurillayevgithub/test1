<?php
// MySQLga ulanish uchun ma'lumotlar
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "dbname";

// Ma'lumotlar bazasiga ulanish
$conn = new mysqli($servername, $username, $password, $dbname);

// Ulashishni tekshirish
if ($conn->connect_error) {
    die("Ulanish hosil qilinmadi: " . $conn->connect_error);
}

// POST so'rovini qabul qilish va ma'lumotlarni to'plash
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

    // SQL so'rovi yaratish
    $sql = "INSERT INTO users (first_name, last_name, phone_number, email, password, education_center, languages, level, start_date, finish_date, file)
    VALUES ('$firstName', '$lastName', '$phoneNumber', '$email', '$password', '$educationCenter', '$languages', '$level', '$startDate', '$finishDate', '$file')";

    if ($conn->query($sql) === TRUE) {
        echo "Yangi yozuv muvaffaqiyatli saqlandi";
    } else {
        echo "Xatolik yuz berdi: " . $conn->error;
    }
}

// Ulanishni yopish
$conn->close();
?>
