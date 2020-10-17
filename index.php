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

<header>
    <?php require_once('templates/header.php'); ?>
</header>

<section class="container">
    <h1>Hello, world!</h1>
    <h2>Hello, world!</h2>
    <h3>Hello, world!</h3>
    <h4>Hello, world!</h4>
    <h5>Hello, world!</h5>
    <h6>Hello, world!</h6>
    <p>Hello, world!</p>

    <article>
        <h2>Top Lektionen</h2>
        <div class="card-group">
            <?php foreach ($topLessons as $lesson) { ?>
                <a href="lesson.php?id=<?php echo $lesson['id']; ?>">
                    <div class="card col-md-4 col-sm-12">
                        <img class="card-img-top" src="<?php echo $lesson['gif_url'] ?>">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $lesson['title'] ?></h3>
                            <p class="card-text">
                                <small class="text-muted">
                                    <a href="category.php?id=<?php echo $lesson['category_id']; ?>">#
                                        <?php
                                        $category =  get_category_by_id($lesson['category_id']);
                                        echo $category['title'];
                                        echo " · ";
                                        ?>
                                    </a>
                                    <?php
                                    echo "Lektion ";
                                    echo $lesson['lesson_nr'];
                                    ?>
                                </small>
                            </p>
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>
    </article>
</section>

<!-- Footer -->
<?php require_once('templates/footer.php'); ?>