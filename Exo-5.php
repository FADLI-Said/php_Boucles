<?php

$month = "Février";
$specialday = 0;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container">

    <p class="mt-3 text-uppercase text-danger fw-bold"><?php echo "$month" ?></p>
    <p style="word-spacing: 2rem;">L M M J V S D</p>
    <div class="d-flex">

        <?php for ($i = 1; $i <= 7; $i++) {
            echo `<p class="align-middle">`;
            for ($totalday = $i; $totalday <= 31; $totalday += 7) {
                "$totalday" . "<br>";
            }
            `</p>`;
        }

        ?>
        <!-- 
        <p class="align-middle">
            <?php for ($totalday = 1; $totalday <= 31; $totalday += 7) {
                echo "$totalday" . "<br>";
            } ?>
        </p>

        <p class="ms-4">
            <?php for ($totalday = 2; $totalday <= 31; $totalday += 7) {
                echo "$totalday" . "<br>";
            } ?>
        </p>

        <p class="ms-4">
            <?php for ($totalday = 3; $totalday <= 31; $totalday += 7) {
                echo "$totalday" . "<br>";
            } ?>
        </p>

        <p class="ms-4">
            <?php for ($totalday = 4; $totalday <= 31; $totalday += 7) {
                echo "$totalday" . "<br>";
            } ?>
        </p>

        <p class="ms-4">
            <?php for ($totalday = 5; $totalday <= 31; $totalday += 7) {
                echo "$totalday" . "<br>";
            } ?>
        </p>

        <p class="ms-4">
            <?php for ($totalday = 6; $totalday <= 31; $totalday += 7) {
                echo "$totalday" . "<br>";
            } ?>
        </p>

        <p class="ms-4">
            <?php for ($totalday = 7; $totalday <= 31; $totalday += 7) {
                echo "$totalday" . "<br>";
            } ?>
        </p> -->

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>