<!-- Controller -->
<?php
require_once('data/data.php');

$allLessons = get_all_lessons();
?>

<!-- Head -->
<?php require_once('templates/head.php'); ?>

<nav>
    <?php require_once('templates/navbar.php'); ?>
</nav>


<section class="container lessons">
    <article>
        <h2 class="py-5">Lektionen</h2>
        <div class="row row-cols-3">
            <?php
                foreach ($allLessons as $lesson) {
                $category =  get_category_by_id($lesson['category_id']);
            ?>
                <div class="col mb-4">
                    <a href="lesson.php?id=<?php echo $lesson['id']; ?>">
                        <div class="card <?php echo strtolower($category['title']); ?>">
                            <img src="<?php echo $lesson['gif_url'] ?>" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title text-center"><?php echo $lesson['title'] ?></h5>
                                <p class="card-text small text-center">
                                    <a href="category.php?id=<?php echo $lesson['category_id']; ?>">
                                        <?php echo "#" . $category['title']; ?>
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
    </article>
</section>

<!-- Footer -->
<?php require_once('templates/footer.php'); ?>