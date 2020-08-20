<!DOCTYPE html>

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

if(isset($_POST['loginButton'])) {
    //Login button was pressed;
}

if(isset($_POST['registerButton'])) {
    //Register button was pressed;
    $username = sanitizeFormUsername($_POST['username']);
    
    $firstName = sanitizeFormName($_POST['firstName']);
    $lastName = sanitizeFormName($_POST['lastName']);
    
    $email = sanitizeFormUsername($_POST['email']);
    $email2 = sanitizeFormUsername($_POST['email2']);

    $password = sanitizeFormPassword($_POST['password']);
    $password = sanitizeFormPassword($_POST['password2']);

}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Upbeat!</title>
</head>
<body>
    <div id="inputContainer">
        <form id="loginForm" action="register.php" method="POST">
            <h2>Login to your account</h2>
            <p>
                <label for="loginUsername">Username: </label>
                <input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. bartSimpson" required>
            </p>
            <p>
                <label for="loginPassword">Password: </label>
                <input id="loginPassword" name="loginPassword" type="password" placeholder="Your Password" required>
            </p>

            <button type="submit" name="loginButton">LOG IN</button>

        </form>



        <form id="registerForm" action="register.php" method="POST">
            <h2>Create your free account</h2>
            <p>
                <label for="username">Username: </label>
                <input id="username" name="username" type="text" placeholder="e.g. bartSimpson" required>
            </p>

            <p>
                <label for="firstName">First Name: </label>
                <input id="firstName" name="firstName" type="text" placeholder="e.g. Bart" required>
            </p>

            <p>
                <label for="lastName">Last Name: </label>
                <input id="lastName" name="lastName" type="text" placeholder="e.g. Simpson" required>
            </p>

            <p>
                <label for="email">Email: </label>
                <input id="email" name="email" type="email" placeholder="e.g. bart@gmail.com" required>
            </p>

            <p>
                <label for="email2">Confirm Email: </label>
                <input id="email2" name="email2" type="email" placeholder="e.g. bart@gmail.com" required>
            </p>

            <p>
                <label for="password">Password: </label>
                <input id="password" name="password" type="password" placeholder="Your Password" required>
            </p>

            <p>
                <label for="password2">Confirm Password: </label>
                <input id="password2" name="password2" type="password" placeholder="Your Password" required>
            </p>

            <button type="submit" name="registerButton">SIGN UP</button>

        </form>
    </div>
</body>
</html>