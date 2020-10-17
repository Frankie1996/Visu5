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
    <article>
        <h2>Alle Themenbereiche aufgelistet:</h2>
        <?php foreach ($allIntros as $intro) { ?>
            <ul>
                <li><?php echo $intro['title'] ?></li>
            </ul>
        <?php } ?>
    </article>
    <article>
        <h2>Top Lektionen</h2>
        <div class="card-group">
            <?php foreach ($topLessons as $lesson) { ?>
                <div class="card col-md-4 col-sm-12">
                    <img class="card-img-top" src="<?php echo $lesson['gif_url'] ?>">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $lesson['title'] ?></h3>
                        <p class="card-text">
                            <small class="text-muted">
                                <a href="#">#
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

<!-- Footer -->
<?php require_once('templates/footer.php'); ?>