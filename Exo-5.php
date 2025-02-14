<?php

$month = mb_strtoupper(string: "Mars",encoding: "utf8");
$specialday = 17;

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

<body class="container text-center">

    <p class="mt-3 text-danger fw-bold ms-4"><?php echo "$month" ?></p>
    <div class="d-flex justify-content-center">

        <?php

        for ($i = 1; $i <= 7; $i++) {
            $gris = ($i == 6 || $i == 7) ? "text-secondary" : "";
            switch ($i) {
                case 1:
                    $day = "L";
                    break;

                case 2:
                    $day = "M";
                    break;

                case 3:
                    $day = "M";
                    break;

                case 4:
                    $day = "J";
                    break;

                case 5:
                    $day = "V";
                    break;

                case 6:
                    $day = "S";
                    break;

                case 7:
                    $day = "D";
                    break;

                default:
                    break;
            }


            echo "<p class='ms-4 $gris fw-bold'>";
            echo "$day" . "<br>";
            for ($totalday = $i; $totalday <= 31; $totalday += 7) {
                $whiteOnRed = $totalday == $specialday ? "text-light bg-danger border rounded-circle px-1 py-1" : "";
                echo "<span class='$whiteOnRed'>$totalday</span>" . "<br>";
            }
            "</p>";
        }

        ?>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>