<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="row container">

    <!-- <div class="opacity-100 col-2 bg-primary">100%</div>
    <div class="opacity-75 col-2 bg-primary">75%</div>
    <div class="opacity-50 col-2 bg-primary">50%</div>
    <div class="opacity-25 col-2 bg-primary">25%</div>
    <div class="opacity-0 col-2 bg-primary">0%</div> -->

    <?php
    for ($i = 100; $i >= 0; $i = $i - 25) {
        echo "<div class='opacity-$i col-2 bg-primary'>$i%</div>";
    }
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>