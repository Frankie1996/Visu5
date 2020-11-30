<!-- Controller -->
<?php
require_once('data/data.php');

$category = get_category_by_id($_GET['id']);
$lessons = get_lessons_by_category_id($_GET['id']);
?>

<!-- Head -->
<?php require_once('templates/head.php'); ?>

<nav>
<?php require_once('templates/navbar.php'); ?>
</nav>

<section class="container category">
    <article class="<?php echo strtolower($category['title']); ?>">
        <h2 class="py-5"><?php echo $category['title']; ?></h2>
        <p><?php echo $category['text']; ?></p>
    </article>

    <article>
        <div class="row row-cols-3">
            <?php foreach ($lessons as $lesson) { ?>
                <div class="col mb-4">
                    <a href="lesson.php?id=<?php echo $lesson['id']; ?>">
                        <div class="card <?php echo strtolower($category['title']); ?>">
                            <img src="<?php echo $lesson['gif_url'] ?>" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title text-center"><?php echo $lesson['title'] ?></h5>
                                <p class="card-text small text-center">
                                    <a href="category.php?id=<?php echo $lesson['category_id']; ?>">
                                        <?php
                                        $category =  get_category_by_id($lesson['category_id']);
                                        echo "#" . $category['title'];
                                        ?>
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