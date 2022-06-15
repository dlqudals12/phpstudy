<!Doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<h1>Web</h1>
<ol>
    <li><a href="idex.php?id=HTML">HTML</a> </li>
    <li><a href="idex.php?id=CSS">CSS</a> </li>
    <li><a href="idex.php?id=JavaScript">JavaScript</a> </li>
</ol>
<h2>
    <?php
    echo $_GET['id'];
    ?>
</h2>
<p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    Aspernatur atque autem, consequuntur corporis doloremque ea earum eius fuga impedit
    itaque magnam nam non nulla praesentium qui quidem quos ullam vero.
</p>
</body>
</html>