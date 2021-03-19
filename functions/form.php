<?php

$errors = '';
$completedFields = '';

//On check si l'utilisateur a remplie le prénom
//Si oui on le conserve pour le laisser dans la boite de saisie
//Si non on rajoute un message d'erreur

//OPTIONNEL

//empty($_GET['firstName']) ? $errors = $errors."firstNameError="."Please enter your first name&" : $completedFields = $completedFields.'firstName='.$_GET['firstName'].'&';

//OPTIONNEL

//Idem nom de famille
//empty($_GET['famName']) ? $errors = $errors."famNameError="."Please enter your familly name&" : $completedFields = $completedFields.'famName='.$_GET['famName'].'&';

//Idem email mais pas de conservation
empty($_GET['email']) ? $errors = $errors."emailError="."Please enter your  email&" : false;

//Si l'email est rempli on check le format avec les fonctions prédéfinies
if (!empty($_GET['email'])) {
    !filter_var($_GET['email'], FILTER_VALIDATE_EMAIL) ? $errors = $errors."emailError="."Please enter a valid email format&" : $completedFields = $completedFields.'email='.$_GET['email'].'&';
};//fonction et arguments prédéfinis dans le langage

//On check s'il y a un message
empty($_GET['message']) ? $errors = $errors."messageError="."Please enter a message&" : $completedFields = $completedFields.'message='.$_GET['message'].'&';

//S'il existe au moins une erreur on l'affiche (ordre d'écriture html = ordre d'écriture php)
if (!empty($errors)) {
    isset($_GET['firstName']) ? $completedFields = $completedFields.'firstName='.$_GET['firstName'].'&' : false;
    isset($_GET['famName']) ? $completedFields = $completedFields.'famName='.$_GET['famName'].'&' : false;
    header('Location: ../contact.php?'.$errors.$completedFields);
};

//Si tout les voyants sont verts on renvoie sur une page pour dire que le msg a été envoyé
if (empty($errors)) {
    isset($_GET['firstName']) ? $completedFields = $completedFields.'firstName='.$_GET['firstName'].'&' : false;
    isset($_GET['famName']) ? $completedFields = $completedFields.'famName='.$_GET['famName'].'&' : false;
    header('Location: ../success.php?'.$completedFields);
}


?>