<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    exit('Form not submited.');
}

require('db/connect.php');
require('functions.php');

$email = trim(filter_var($_POST['email']),FILTER_SANITIZE_EMAIL);
$password_user = sanitizeString($_POST['password']);

try {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //https://www.abstractapi.com/email-verification-validation-api
        //https://www.youtube.com/watch?v=JvGFlAK2fg4
        throw new Exception('Email is invalid!');
    }

    if (empty($email) || empty($password_user)) {
        throw new Exception('Data missing!');
    }

} catch (Exception $e) {
    echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    exit;
}

$dbpassword = generateFakePassword();

$query = 'SELECT id_user, email_user, password_user FROM users WHERE email_user = :email';
$stmt = $conn -> prepare($query);
$stmt -> bindValue(':email', $email);
$stmt -> execute();

$return = $stmt -> fetch(PDO::FETCH_ASSOC);

if ($stmt -> rowCount() > 0) {
    $dbpassword = $return['password_user'];
}

if ( password_verify($password_user, $dbpassword) ) {

    session_regenerate_id(true);

    $_SESSION['isAuth'] = true;   
    $_SESSION['idUser'] = $return['id_user'];

    if (isset($_COOKIE['resumeProduct'])) {
        header("Location: ../product.php?id=".$_COOKIE['resumeProduct']);
        setcookie("resumeProduct", "", -1 , "/");
        exit();
    }

    echo 'Logged in! ID ='.$_SESSION['idUser'].'<br>';
    echo 'Logout: <a href="logout.php">Log out</a>';

    //header("Location: ../index.php");
    //exit();

} else {exit;
    header("Location: ../index.html?error=invalid");
    exit();
}