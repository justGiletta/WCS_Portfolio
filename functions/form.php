<?php
session_start();
$errors = $suggest = $data = [];

$_SESSION['firstName'] = trim(htmlspecialchars($_POST['firstName']));

$_SESSION['famName'] = trim(htmlspecialchars($_POST['famName']));

!empty($_POST['email']) ? $_SESSION['email'] = $_POST['email'] : $errors['email'] = "emailError=Required";
if (!empty($_POST['email'])) {
    !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ? $errors['email'] = "emailError=Invalid format" : false;
};

!empty($_POST['message']) ? $_SESSION['message'] = trim(htmlspecialchars($_POST['message'])) : $errors['message'] = "messageError=Required";


if (!empty($errors)) {
    empty($_SESSION['firstName']) ? $suggest['firstNameSuggest'] = 'firstNameSuggest=Advised for better experience' : false;
    empty($_SESSION['famName']) ? $suggest['famNameSuggest'] = 'famNameSuggest=Advised for better experience' : false;
    header('Location: ../contact.php?'.implode('&', $errors).'&'.implode('&', $suggest));
};

//Si tout les voyants sont verts on renvoie sur une page pour dire que le msg a été envoyé
if (empty($errors)) {
    header('Location: ../success.php?');
}

?>