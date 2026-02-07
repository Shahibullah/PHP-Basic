

<?php 
$var = 5;
//isset() is used in PHP to check whether a variable exists AND is not NULL.
if (isset($var)) {
    $result = $var + 10;
    echo $result;
} else {
    $result = "It is null";
    echo $result;
}
?>
