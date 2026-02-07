<?php
$fruits = ["Apple", "Banana", "Mango"];

foreach ($fruits as $index => $fruit) {
    echo "$index : $fruit <br>";
};
echo "<br>";
print_r($fruits);
?>

<?php
$fruits = ["Apple", "Banana", "Mango"];

foreach ($fruits as $index) {
    echo "$fruit [$index] : <br>";
};
echo "<br>";
print_r($fruits);
?>
