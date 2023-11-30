<form method="post">
    <label for="username">Username</label>
    <input id="username" name="username" type="text"/>

    <label for="password">Password</label>
    <input id="password" name="password" type="password"/>

    <input type="submit" value="Login" />
</form>

<?php

if (isset($_POST['username']) == true && empty($_POST['username']) == false) {
    $email = $_POST['username'];
if (filter_var($email, FILTER_VALIDATE_EMAIL) == true) {
    echo("That's a valid email address");
} else {
    echo("Not a valid email address");
}
}

function validPW($pass1) {
    if (strlen($pass1)>= 8) {
        return TRUE;
    }
}