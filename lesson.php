<!-- Controller -->
<?php
require_once('data/data.php');
$lesson = get_lesson_by_id($_GET['id']);

?>

<!-- Head -->
<?php require_once('templates/head.php'); ?>

<nav>
    <?php require_once('templates/navbar.php'); ?>
</nav>

<section class="container">
    <div class="row">
        <article class="col-md-6">
            <h1><?php echo $lesson['title']; ?></h1>
            <p><?php echo $lesson['text']; ?></p>
            <h2>Das wichtigste in Kürze</h2>
            <p><?php echo $lesson['important']; ?></p>
        </article>
        <article class="col-md-6">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo $lesson['gif_url']; ?>" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="..." alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="..." alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </article>
    </div>
</section>


<!-- Footer -->
<?php require_once('templates/footer.php'); ?>