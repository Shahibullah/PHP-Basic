<html>
<body>

<form method="post">
    Enter user type: <input type="text" name="user">
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_POST['user'])) {
    $user = $_POST['user'];

    switch ($user) {
        case "admin":
            echo "Welcome $user";
            break;
        case "public":
            echo "Hi People";
            break;
        default:
            echo "bye!";
    }
}
?>

</body>
</html>
