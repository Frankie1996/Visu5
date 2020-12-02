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
        <h2 class="mb-4">Aktuelle Themen</h2>
        <div class="row">
            <?php
            foreach ($topLessons as $lesson) {
                $category =  get_category_by_id($lesson['category_id']);
            ?>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <a class="link-title" href="lesson.php?id=<?php echo $lesson['id']; ?>">
                        <div class="card <?php echo strtolower($category['title']); ?>">
                            <img src="<?php echo $lesson['gif_url_static'] ?>" class="card-img-top gif_static">
                            <img src="<?php echo $lesson['gif_url'] ?>" class="card-img-top gif">
                            <div class="card-body">
                                <h5 class="card-title text-center"><?php echo $lesson['title'] ?></h5>
                                <p class="card-text small text-center">
                                    <b><a href="category.php?id=<?php echo $lesson['category_id']; ?>">
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
        <h2 class="mb-4">Wissenstest</h2>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1583434987437-1b9dcbe44c9e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2658&q=80" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Card title</h5>
                        <p class="card-text text-center"># Energie • Lektion 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1583434987437-1b9dcbe44c9e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2658&q=80" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Card title</h5>
                        <p class="card-text text-center"># Energie • Lektion 1</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1583434987437-1b9dcbe44c9e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2658&q=80" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Card title</h5>
                        <p class="card-text text-center"># Energie • Lektion 1</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php require_once('templates/footer.php'); ?>