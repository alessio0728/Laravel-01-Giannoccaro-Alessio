<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Laravel 01</title>
</head>
<body>

<center><h1> ESERCITAZIONE LARAVEL ALESSIO GIANNOCCARO</h1></center>

<center><h2>HOME</h2></center>



<x-navbar/>
<center><div>
<img src="data:image/png;base64,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" class="img-fluid" alt="aulab">

</div>

<x-calendario/>
</center>
<center>
<form style="" action="" method="post"></form>

</center>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>