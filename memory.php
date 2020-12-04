<!-- Controller -->
<?php
require_once('data/data.php');

$allIntros = get_all_intros();
$topLessons = get_top_lessons();
?>

<!-- Head -->
<?php require_once('templates/head.php'); ?>

<!-- Navigation -->
<?php require_once('templates/navbar.php'); ?>

<section class="memory container-fluid">
    <div class="container py-5">
        <h2 class="pb-4 text-center">Energie Memory</h2>

        <div class="row mb-4">
            <div class="col">
                <section class="score-panel">
                    <ul class="stars">
                        <li><i id="star1" class="fa fa-star star"></i></li>
                        <li><i id="star2" class="fa fa-star star"></i></li>
                        <li><i id="star3" class="fa fa-star star"></i></li>
                    </ul>

                    <div id="timeElapsed" class="timeElapsed">
                        <span id="secondsElapsed">0</span> s
                    </div>

                    <div class="moves">
                        <span id="movesNumberDisplay">0</span> Züge
                    </div>

                    <div class="matched">
                        <span id="matchedCoupleDisplay">0</span>/8 Paare
                    </div>

                    <div id="restartButton" class="restart">
                        <i class="fa fa-repeat"></i>
                    </div>
                </section>

                <ul id="deck" class="deck">
                    <li class="card sun" id="card-js">
                        <i class="fa fa-sun-o"></i>
                    </li>
                    <li class="card water">
                        <i class="fa fa-tint"></i>
                    </li>
                    <li class="card globe">
                        <i class="fa fa-globe"></i>
                    </li>
                    <li class="card bolt">
                        <i class="fa fa-bolt"></i>
                    </li>
                    <li class="card tree">
                        <i class="fa fa-tree"></i>
                    </li>
                    <li class="card globe">
                        <p class="text-center mb-0">Treibhausgase</p>
                    </li>
                    <li class="card leaf">
                        <i class="fa fa-leaf"></i>
                    </li>
                    <li class="card bicycle">
                        <i class="fa fa-bicycle"></i>
                    </li>
                    <li class="card sun">
                        <p class="text-center mb-0">Solarenergie</p>
                    </li>
                    <li class="card handshake">
                        <i class="fa fa-handshake-o "></i>
                    </li>
                    <li class="card leaf">
                        <p class="text-center mb-0">Umwelt</p>
                    </li>
                    <li class="card handshake">
                        <p class="text-center mb-0">Gemeinsam Stark</p>
                    </li>
                    <li class="card bolt">
                        <p class="text-center mb-0">Energie</p>
                    </li>
                    <li class="card bicycle">
                        <p class="text-center mb-0">Muskelkraft</p>
                    </li>
                    <li class="card water">
                        <p class="text-center mb-0">Wasserkraft</p>
                    </li>
                    <li class="card tree">
                        <p class="text-center mb-0">CO2 Filter</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-5 col-10 mb-2">
                <a href="category?id=1"><img src="assets/img/buttons/uebersicht.svg" alt="Uebersicht"></a>
            </div>
            <div class="col-md-5 col-10 mb-2">
                <a href="category?id=2"><img src="assets/img/buttons/next.svg" alt="Nächstes Modul"></a>
            </div>
        </div>
    </div>
</section>

<script src="assets/js/memory.js"></script>
<!-- Footer -->
<?php require_once('templates/footer.php'); ?>