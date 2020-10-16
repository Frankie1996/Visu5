<!-- Controller -->
<?php
require_once('data/config.php');
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
        <h2>Alle Themenbereiche aufgelistet:</h2>
        <?php foreach($allIntros as $intro) { ?>
            <ul>
                <li><?php echo $intro['title'] ?></li>
            </ul>
        <?php } ?>
    </article>
    <article>
    <h2>Alle Top Lektionen</h2>
        <?php foreach($topLessons as $lesson) { ?>
            <ul>
                <li>Lektion: <?php echo $lesson['title'] ?></li>
                <li>Thema: 
                    <?php 
                        $category =  get_category_by_id($lesson['category_id']);
                        echo $category['title']; 
                    ?>
                </li>
            </ul>
        <?php } ?>
    </article>
</section>

<!-- Footer -->
<?php require_once('templates/footer.php'); ?>