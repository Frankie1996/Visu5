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


<header>
    <?php require_once('templates/header.php'); ?>
</header>

<section class="container-fluid featured">
    <div class="container">
        <h3 class="mb-2">Aktuelle Themen</h3>
        <p class="mb-4">Hier zeigen wir dir Lektionen, die ein aktuelles Thema behandeln, neu auf der Plattform aufgeschaltet wurden oder äusserst beliebt bei unseren Nutzern sind.</p>
        <div class="row">
            <?php
            foreach ($topLessons as $lesson) {
                $category =  get_category_by_id($lesson['category_id']);
            ?>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <a class="link-title" href="lesson?id=<?php echo $lesson['id']; ?>">
                        <div class="card <?php echo strtolower($category['title']); ?>">
                            <img src="<?php echo $lesson['gif_url_static'] ?>" class="card-img-top gif_static">
                            <img src="<?php echo $lesson['gif_url'] ?>" class="card-img-top gif">
                            <div class="card-body">
                                <h5 class="card-title text-center"><?php echo $lesson['title'] ?></h5>
                                <p class="card-text small text-center">
                                    <b><a href="category?id=<?php echo $lesson['category_id']; ?>">
                                            <?php echo "#" . $category['title']; ?></b>
                    </a>
                    •
                    <?php
                    echo "Lektion ";
                    echo $lesson['lesson_nr'];
                    ?></p>
                </div>
        </div>
        </a>
    </div>
<?php } ?>
</div>
</div>
</section>
<section class="container-fluid experience">
    <div class="container">
        <h3 class="mb-2">Wissenstest</h3>
        <p class="mb-4">Von hier aus kannst du direkt auf unsere Quizrunden und Spiele zugreifen.</p>
        <div class="row">
            <?php
            foreach ($topLessons as $lesson) {
                $category =  get_category_by_id($lesson['category_id']);
            ?>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <a class="link-title" href="lesson?id=<?php echo $lesson['id']; ?>">
                        <div class="card <?php echo strtolower($category['title']); ?>">
                            <img src="<?php echo $lesson['gif_url_static'] ?>" class="card-img-top gif_static">
                            <img src="<?php echo $lesson['gif_url'] ?>" class="card-img-top gif">
                            <div class="card-body">
                                <h5 class="card-title text-center"><?php echo $lesson['title'] ?></h5>
                                <p class="card-text small text-center">
                                    <b><a href="category?id=<?php echo $lesson['category_id']; ?>">
                                            <?php echo "#" . $category['title']; ?></b>
                    </a>
                    •
                    <?php
                    echo "Lektion ";
                    echo $lesson['lesson_nr'];
                    ?></p>
                </div>
        </div>
        </a>
    </div>
<?php } ?>
</div>
</div>
</section>

<!-- Footer -->
<?php require_once('templates/footer.php'); ?>