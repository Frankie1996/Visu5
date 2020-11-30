<!-- Controller -->
<?php
require_once('data/data.php');
$lesson = get_lesson_by_id($_GET['id']);
$category =  get_category_by_id($lesson['category_id']);

$images = $lesson['img_url'];
$img = explode(", ", $images);

$importance = $lesson['important'];
$important = explode(", ", $importance);

$learning_goals = $lesson['lernziele'];
$learning_goal = explode(", ", $learning_goals);

$biggest_problems = $lesson['groeste_probleme'];
$biggest_problem = explode(", ", $biggest_problems);
?>

<!-- Head -->
<?php require_once('templates/head.php'); ?>

<nav>
    <?php require_once('templates/navbar.php'); ?>
</nav>

<section class="container lesson <?php echo strtolower($category['title']); ?> my-5">
    <h2 class="pb-4"><?php echo $lesson['title']; ?></h2>
    <div class="row">
        <article class="col-lg-6 col-sm-12 order-lg-first">
            <div class="text pb-3">
                <p><?php echo $lesson['text']; ?></p>
            </div>
            <div class="info">
                <?php
                if ($lesson['einfuerung'] == true) { ?>
                    <h3 class="mb-4">Lernziele</h3>
                    <ul>
                        <?php for ($i = 0; $i < count($learning_goal) - 1; ++$i) { ?>
                            <li><?php echo $learning_goal[$i] ?></li>
                        <?php }; ?>
                    </ul>

                    <h3 class="mb-4">Grösste Probleme</h3>
                    <ul>
                        <?php for ($i = 0; $i < count($biggest_problem) - 1; ++$i) { ?>
                            <li><?php echo $biggest_problem[$i] ?></li>
                        <?php }; ?>
                    </ul>

                <?php } else { ?>
                    <h3 class="mb-4">Das wichtigste in Kürze</h3>
                    <ul>
                        <?php for ($i = 0; $i < count($important) - 1; ++$i) { ?>
                            <li><?php echo $important[$i] ?></li>
                        <?php }; ?>
                    </ul>
                <?php } ?>
            </div>
        </article>
        <article class="col-lg-6 col-sm-12 order-sm-first">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo $img[0]; ?>" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo $img[1]; ?>" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo $img[2]; ?>" alt="Third slide">
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