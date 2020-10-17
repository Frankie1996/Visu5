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

<section class="container-fluid featured">
    <div class="container">
        <h2>Spannende Lektionen</h2>
        <div class="card-deck">

            <?php foreach ($topLessons as $lesson) { ?>

                <div class="card">
                    <img src="<?php echo $lesson['gif_url'] ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php echo $lesson['title'] ?></h5>
                        <p class="card-text text-center">
                            <?php
                            $category =  get_category_by_id($lesson['category_id']);
                            echo $category['title'];
                            echo " · ";
                            ?>
                            <?php
                            echo "Lektion ";
                            echo $lesson['lesson_nr'];
                            ?></p>
                    </div>
                </div>
            <?php } ?>



            <!-- Footer -->
            <?php require_once('templates/footer.php'); ?>