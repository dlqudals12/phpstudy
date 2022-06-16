<!Doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h1>Web</h1>
<ol>
    <?php
        $list = scandir('./data');
        $i = 0;
        while($i < count($list)) {
            if ($list[$i] != '.' && $list[$i] != '..') {
                echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
            }
            $i += 1;
        }
    ?>
</ol>
<h2>
    <?php
    if(isset($_GET['id'])) {
    echo $_GET['id'];
    } else {
        echo "Welcom";
    }
    ?>
</h2>
<p>
    <?php
    if (isset($_GET['id'])) {
        echo file_get_contents("data/" . $_GET['id']);
    } else {
        echo "Hello, PHP";
    }
    ?>
</p>
</body>
</html>