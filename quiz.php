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

<section class="quiz container-fluid d-flex justify-content-center">
    <div class="container py-5">
        <h2 class="pb-4 text-center">Nachhaltigkeits Quiz</h2>

        <div class="mb-4 text-center" id="quiz">

            <h4 class="text-center" id="question"></h4>

            <h3 class="text-center" id="score"></h3>

            <div class="choices">
                <button id="guess0" class="btn">
                    <p id="choice0"></p>
                </button>

                <button id="guess1" class="btn">
                    <p id="choice1"></p>
                </button>

                <button id="guess2" class="btn">
                    <p id="choice2"></p>
                </button>

                <button id="guess3" class="btn">
                    <p id="choice3"></p>
                </button>
            </div>

            <p class="text-center" id="progress"></p>

        </div>


        <div class="row justify-content-center">
            <div class="col-3">
                <a href="category?id=2"><img src="assets/img/buttons/uebersicht.svg" alt="Uebersicht"></a>
            </div>
            <div class="col-3">
                <a href="category?id=3"><img src="assets/img/buttons/next.svg" alt="Nächstes Modul"></a>
            </div>
        </div>
    </div>
</section>

<script src="assets/js/quiz.js"></script>
<!-- Footer -->
<?php require_once('templates/footer.php'); ?>