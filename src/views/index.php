<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excursió Cendrassos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"
        integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <script src="/js/index.js" type="module"></script>
</head>

<body>

    <?php require "header.php"; ?>


<?php if (!$cookiesAccepted) { ?>
<!-- Button trigger modal -->
<button style="display: none"type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cookiesModal" id="cookiesDetonator">
    Dummy
</button>

<!-- Modal -->
<div class="modal fade" id="cookiesModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Accepta les cookies</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Utilitzem cookies en aquesta pàgina. Accepta-les per a poder continuar. Les cookies són estrictament necessàries i no son de seguiment, així que no et preocupis.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="acceptCookies">Acceptar</button>
      </div>
    </div>
  </div>
</div>

    <?php } ?>



    <div class="container">

        <h1>Excursió de DAW</h1>
        <p>Els alumnes de 2 de DAW van crear una aplicació de reserves d'apartaments. Com que van fer un treball molt
            gran, volen celebrar-ho fent-ho una</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.</p>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/assets/carousel_1.jpg" class="d-block w-100" alt="Imatge de nens en una excursió 1">
                </div>
                <div class="carousel-item">
                    <img src="/assets/carousel_2.jpg" class="d-block w-100" alt="Imatge de nens en una excursió 2">
                </div>
                <div class="carousel-item">
                    <img src="/assets/carousel_3.jpg" class="d-block w-100" alt="Imatge de nens en una excursió 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Següent</span>
            </button>
        </div>
        <form id="registration" action="?r=registration" method="POST" enctype="multipart/form-data">
            <h2>Inscripció</h2>
            <div class="alert alert-light" role="alert" id="userlog">
                Siusplau, omple el formulari per a realitzar la inscripció.
            </div>

            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="inputName" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="inputName" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="inputSurnames" class="form-label">Cognoms</label>
                        <input type="text" class="form-control" id="inputSurnames" name="surnames">
                    </div>
                    <!-- Input type date -->
                    <div class="mb-3">
                        <label for="inputDate" class="form-label">Data de naixement</label>
                        <input type="date" class="form-control" id="inputDate" name="birthdate">
                    </div>
                    <!-- Carrer, numero, ciutat i codi postal -->
                    <div class="mb-3">
                        <label for="inputStreet" class="form-label">Carrer</label>
                        <input type="text" class="form-control" id="inputStreet" name="street">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="inputNumber" class="form-label">Número</label>
                        <input type="text" class="form-control" id="inputNumber" name="number">
                    </div>
                    <div class="mb-3">
                        <label for="inputCity" class="form-label">Ciutat</label>
                        <input type="text" class="form-control" id="inputCity" name="city">
                    </div>
                    <div class="mb-3">
                        <label for="inputPostalCode" class="form-label">Codi postal</label>
                        <input type="text" class="form-control" id="inputPostalCode" name="postal_code">
                    </div>
                    <!-- Resguard del pagament (PDF o imatge) -->
                    <div class="mb-3">
                        <label for="inputPayment" class="form-label">Resguard del pagament</label>
                        <!-- Allow only PDF and image files -->
                        <input type="file" class="form-control" id="inputPayment" name="payment" accept=".pdf,.jpg,.png">
                    </div>

                </div>


            </div>
            <button type="submit" id="submit" disabled class="btn btn-primary">Realitzar inscripció</button>

        </form>
    </div>
</body>

</html>