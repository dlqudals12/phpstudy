<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>function</title>
</head>
<body>
    <h1>Function</h1>
    <?php
        $str = "Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Accusantium adipisci asperiores aut beatae blanditiis consequatur corporis,
                deserunt doloribus exercitationem illum inventore
                iusto laboriosam laborum minima nisi quos vel veritatis voluptatem.";
        echo $str;
    ?>
    <h2>strlen()</h2>
    <?php
        echo strlen($str);
    ?>
    <h2>nl2br</h2>
    <?php
        echo nl2br($str);
    ?>
</body>
</html>