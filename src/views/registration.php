<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excursió Cendrassos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js" integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
</head>
<body>
    <?php require "header.php"; ?>
    <div class="container">
        <h1>Informació del registre</h1>
        <?php if ($valid["valid"]) { ?>
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Felicitats!</h4>
                <p>El teu registre ha estat validat correctament.</p>
            </div>
            <h4>Dades del registre</h4>
            <?php foreach ($data as $key => $value) { ?>
                <p><strong><?= $key ?>:</strong> <?= $value ?></p>
            <?php } ?>
            <p class="mb-0">Tornar a <a href="/">inici</a>.</p>
        <?php } else { ?>
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Error!</h4>
                <p>El teu registre no ha estat validat correctament.</p>
            </div>
            <p class="mb-0">Tornar a <a href="/">inici</a>.</p>
        <?php } ?>
    </div>
</body>
</html>