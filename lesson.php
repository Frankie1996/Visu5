<!-- Controller -->
<?php
require_once('data/data.php');

$allIntros = get_all_intros();
$topLessons = get_top_lessons();
?>

<!-- Head -->
<?php require_once('templates/head.php'); ?>

<nav>
<?php require_once('templates/navbar.php'); ?>
</nav>

<section class="container">
    <h1>Einzelne Lektion</h1>
    <article>

    </article>
</section>

<!-- Footer -->
<?php require_once('templates/footer.php'); ?>