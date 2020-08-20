<?php

function sanitizeFormPassword($inputText){
    $inputText = strip_tags($inputText);
    return $inputText;
}

function sanitizeFormUsername($inputText){
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ","",$inputText);
    return $inputText;
}

function sanitizeFormName($inputText){
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ","",$inputText);
    $inputText = ucfirst(strtolower($inputText));
    return $inputText;
}


if(isset($_POST['registerButton'])) {
    //Register button was pressed;
    $username = sanitizeFormUsername($_POST['username']);
    
    $firstName = sanitizeFormName($_POST['firstName']);
    $lastName = sanitizeFormName($_POST['lastName']);
    
    $email = sanitizeFormUsername($_POST['email']);
    $email2 = sanitizeFormUsername($_POST['email2']);

    $password = sanitizeFormPassword($_POST['password']);
    $password2 = sanitizeFormPassword($_POST['password2']);

    validateUsername($username);
    validateFirstName($firstName);
    validateLastName($lastName);
    validateEmails($email, $email2);
    validatePasswords($password, $password2);

}

?>