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
                            echo '#'.$category['title'];
                            echo " · ";
                            ?>
                            <?php
                            echo "Lektion ";
                            echo $lesson['lesson_nr'];
                            ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<section class="container-fluid experience">
    <div class="container">
        <h2>Umwelt erleben</h2>
        <div class="card-deck">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1583434987437-1b9dcbe44c9e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2658&q=80" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Card title</h5>
                    <p class="card-text text-center"># Energie • Lektion 1</p>
                </div>
            </div>
            <div class="card">
                <img src="https://images.unsplash.com/photo-1583434987437-1b9dcbe44c9e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2658&q=80" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Card title</h5>
                    <p class="card-text text-center"># Energie • Lektion 1</p>
                </div>
            </div>
            <div class="card">
                <img src="https://images.unsplash.com/photo-1583434987437-1b9dcbe44c9e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2658&q=80" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">Card title</h5>
                    <p class="card-text text-center"># Energie • Lektion 1</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php require_once('templates/footer.php'); ?>