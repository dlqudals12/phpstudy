<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Conditional</h1>
    <h2>if</h2>
    <?php
    if(true) {
        echo 1;
    } else {
        echo 2;
    }
    ?>
    <h2>While</h2>
    <?php
    $a = 0;
    while ($a < 5) {
        echo '2<br>';
        $a += 1;
    }
    ?>
    <h2>For</h2>
    <?php
    for ($i = 0; $i < 5; $i++) {
        echo $a.'<br>';
        $a += 1;
    }
    ?>
</body>
</html>