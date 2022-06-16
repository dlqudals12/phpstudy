<!Doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h1>Array</h1>
    <?php
    $coworkers = array('egoing', 'leezche', 'duru');
    foreach ($coworkers as $key) {
        echo $key.'<br>';
    }
    echo count($coworkers).'<br>';
    echo var_dump(count($coworkers)).'<br>';
    echo $coworkers[1];
    ?>

</body>
</html>