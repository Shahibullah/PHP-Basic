<?php
function checkUser(string $user) {
    if (isset($user)) {
        return "User is: $user";
    } else {
        return "No user found";
    }
}

echo checkUser("Shahib");
?>

