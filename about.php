<!-- Controller -->
<?php
require_once('data/data.php');
$about = get_about();
?>

<!-- Head -->
<?php require_once('templates/head.php'); ?>

<!-- Navigation -->
<?php require_once('templates/navbar.php'); ?>

<section class="container about my-5">
    <div class="row">
        <h2 class="pb-4"><?php echo $about['title']; ?></h2>
    </div>
    <div class="row">
        <p><?php echo $about['text']; ?></p>
    </div>

</section>

<!-- Footer -->
<?php require_once('templates/footer.php'); ?>