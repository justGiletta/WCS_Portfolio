<?php

$errors = $suggest = $data = [];


empty($_REQUEST['email']) ? $errors['email'] = "emailError=Required" : false;


if (!empty($_REQUEST['email'])) {
    !filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL) ? $errors['email'] = "emailError=Invalid format" : $data['email'] = 'email='.trim(htmlspecialchars($_REQUEST['email']));
};//fonction et arguments prédéfinis dans le langage

//On check s'il y a un message
empty($_REQUEST['message']) ? $errors['message'] = "messageError=Required" : $data['message'] = 'message='.trim(htmlspecialchars($_REQUEST['message']));

empty($_REQUEST['firstName']) ? $errors['firstNameSuggest'] = 'firstNameSuggest=Advised for better experience' : $data['firstName'] = 'firstName='.trim(htmlspecialchars($_REQUEST['firstName'])) ;
empty($_REQUEST['famName']) ? $errors['famNameSuggest'] = 'famNameSuggest=Advised for better experience' : $data['famName'] = 'famName='.trim(htmlspecialchars($_REQUEST['famName']));

//S'il existe au moins une erreur on l'affiche (ordre d'écriture html = ordre d'écriture php)
if (!empty($errors)) {
    header('Location: ../contact.php?'.implode('&', $errors).'&'.implode('&', $suggest).'&'.implode('&', $data));
};

//Si tout les voyants sont verts on renvoie sur une page pour dire que le msg a été envoyé
if (empty($errors)) {
    header('Location: ../success.php?'.implode('&', $data));
}


?>