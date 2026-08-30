<?php

$text = [];

include("../includes/header.php");
include("../includes/navbar_app.php");



?>

<div class="text-center vh-50 d-flex flex-column justify-content-center m-5">
    <h1 class="display-3 mb-4"><?= $text['product_list'] ?></h1>
</div>


<div class="container mx-auto mt-3 my-6">
    <div class="bg-light p-4 rounded mb-4 border">
        <!-- Comença el form del filtre de productes -->
        <form action="#" method="GET" class="row g-3">
            <div class="col-md-4">
                <!-- Filtre per nom -->
                <label class="form-label">Nom del producte </label>
                <input
                    type="text"
                    name="name"
                    class="form-control"
                    placeholder="Buscar producte">
            </div>


            <div class="col-md-4">
                <!-- Filtre per categoria -->
                <label class="form-label">Categoria</label>

                <select name="category" class="form-select">
                    <option value="">Tores les categories</option>
                    <option value="categoria1">
                        categoria1
                    </option>
                    <option value="categoria2">
                        categoria2
                    </option>
                    <option value="categoria3">
                        categoria3
                    </option>

                </select>

            </div>

            <div class="col-md-4">
                <!-- Filtre per preu maxim -->
                <label class="form-label">Preu</label>

                <input
                    type="number"
                    name="price"
                    class="form-control"
                    step="0.01"
                    placeholder="Preu maxim">
            </div>

            <div class="col-12 d-flex justify-content-center gap-2">
                <button type="submit" class="btn btn-primary">
                    Filtrar
                </button>
                <a href="#" class="btn btn-secondary">
                    Netejar Filtres
                </a>
            </div>

        </form>
    </div>

    <!-- Comença la llista de productes -->
    <div class="row g-4 mb-4">
        <!-- card de producte -->
        <div class="col-md-3 col-sm-6">
            <div class="card bg-light w-100">
                <div class="card-body">
                    <!-- Nom del producte -->
                    <h5 class="card-title fw-bold">
                        Nom del producte
                    </h5>
                    <!-- imatge -->
                    <img
                        src="../public/images/products/laptop_stand.jpg"
                        class="card-img-top"
                        style="height: 200px; object-fit: cover;"
                        alt="Nom del producte">
                    <!-- Descripcio -->
                    <p class="card-text overflow-hidden" style="height:5rem;">
                        Descripcio del producte
                    </p>
                    <!-- preu -->
                    <p class="fw-bold text-center">
                        Preu del producte €
                    </p>
                    <!-- Boto per afegir al carret fent servir POST -->
                    <div class="d-flex justify-content-center">
                        <a
                            href="#"
                            class="btn btn-primary">

                            <i class="bi bi-cart-plus"></i>
                            Aegir al carret
                        </a>

                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="card bg-light w-100">
                <div class="card-body">
                    <!-- Nom del producte -->
                    <h5 class="card-title fw-bold">
                        Nom del producte
                    </h5>
                    <!-- imatge -->
                    <img
                        src="../public/images/products/laptop_stand.jpg"
                        class="card-img-top"
                        style="height: 200px; object-fit: cover;"
                        alt="Nom del producte">
                    <!-- Descripcio -->
                    <p class="card-text overflow-hidden" style="height:5rem;">
                        Descripcio del producte
                    </p>
                    <!-- preu -->
                    <p class="fw-bold text-center">
                        Preu del producte €
                    </p>
                    <!-- Boto per afegir al carret fent servir POST -->
                    <div class="d-flex justify-content-center">
                        <a
                            href="#"
                            class="btn btn-primary">

                            <i class="bi bi-cart-plus"></i>
                            Aegir al carret
                        </a>

                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="card bg-light w-100">
                <div class="card-body">
                    <!-- Nom del producte -->
                    <h5 class="card-title fw-bold">
                        Nom del producte
                    </h5>
                    <!-- imatge -->
                    <img
                        src="../public/images/products/laptop_stand.jpg"
                        class="card-img-top"
                        style="height: 200px; object-fit: cover;"
                        alt="Nom del producte">
                    <!-- Descripcio -->
                    <p class="card-text overflow-hidden" style="height:5rem;">
                        Descripcio del producte
                    </p>
                    <!-- preu -->
                    <p class="fw-bold text-center">
                        Preu del producte €
                    </p>
                    <!-- Boto per afegir al carret fent servir POST -->
                    <div class="d-flex justify-content-center">
                        <a
                            href="#"
                            class="btn btn-primary">

                            <i class="bi bi-cart-plus"></i>
                            Aegir al carret
                        </a>

                    </div>

                </div>
            </div>
        </div>



    </div>
</div>

<?php
include("../includes/footer.php");
?>