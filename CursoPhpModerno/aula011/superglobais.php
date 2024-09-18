<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <pre>
            <?php

            echo "<h1>Super Global GET</h1>";
            var_dump($_GET);

            echo "<h1>Super Global POST</h1>";
            var_dump($_POST);

            ?>
        </pre>
    </main>
</body>

</html>