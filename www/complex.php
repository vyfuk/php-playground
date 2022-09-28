<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/general.css">
</head>
<body>
    <div class="orange center">
        <?php
        // print 6 levels of headings
        for ($i = 1; $i <= 6; $i++) {
            // We can directly reference variables in double-quoted string.
            // So the code below will output h1, h2 etc.
            echo "<h$i>Blinding orange!</h$i>";
        }
        ?>
    </div>
    
    <div class="center">
        <label id="counter">0</label>
        <button id="counterButton">Click me!</button>
    </div>
    <script src="js/general.js"></script>
</body>
</html>