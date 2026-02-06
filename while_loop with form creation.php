<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Option</title>
</head>
<body>
    <from>
        <select name = "year">
            <?php $year = 2000;
            while ($year <= 2010){
                echo "<option value='$year'>$year</option>";
                $year ++;
            } 
            ?>
        </select>
    </from>
    
</body>
</html>