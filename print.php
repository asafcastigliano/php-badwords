<?php

$paragrafo = $_GET["paragrafo"];
$parolaCensurata = $_GET["parola_censurata"];

$paragrafoCensurato = str_ireplace($parolaCensurata, '***', $paragrafo);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <p>
                    <h1>
                        Paragrafo originale
                    </h1>
                    <?php
                            echo "<p>".$paragrafo."</p>";
                            echo "Lunghezza: ".strlen($paragrafo);
                        ?>
                    <h1>
                        Paragrafo censurato
                    </h1>
                    <?php
                            echo "<p>".$paragrafoCensurato."</p>";
                            echo "Lunghezza: ".strlen($paragrafoCensurato);
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>