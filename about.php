<!-- Controller -->
<?php
require_once('data/data.php');
$about = get_about();
?>

<!-- Head -->
<?php require_once('templates/head.php'); ?>

<nav>
<?php require_once('templates/navbar.php'); ?>
</nav>


<section class="container">

    <article>
        <h1><?php echo $about['title']; ?></h1>
        <p><?php echo $about['text']; ?></p>
    </article>
</section>

<!-- Footer -->
<?php require_once('templates/footer.php'); ?>