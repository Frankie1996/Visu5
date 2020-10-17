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

<section class="container">
    <article>
        <h1><?php echo $category['title']; ?></h1>
        <p><?php echo $category['text']; ?></p>
    </article>
</section>
<section class="container">
    <article>
    <h2>Lektionen</h2>
        <div class="card-group">
        <?php foreach($lessons as $lesson) { ?>
            <div class="card col-md-4">
                <img src="<?php echo $lesson['gif_url'] ?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"> <?php echo $lesson['title'] ?> </h5>
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
        <?php } ?>
        </div>
    </article>
</section>

<!-- Footer -->
<?php require_once('templates/footer.php'); ?>