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

    $wasSuccessful = $account->register($username, $firstName, $lastName, $email, $email2, $password, $password2);

    if($wasSuccessful == true) {
        $_SESSION['userLoggedIn'] = $username;
        header("Location: index.php");
    }
}

?>