<!-- Controller -->
<?php
require_once('data/data.php');
$energy_id = 1;
$sustainability_id = 2;
$climate_id = 3;
$food_waste_id = 4;
$recycling_id = 5;
$energy_lessons = get_all_lessons_by_cat_id($energy_id);
$sustainability_lessons = get_all_lessons_by_cat_id($sustainability_id);
$climate_lessons = get_all_lessons_by_cat_id($climate_id);
$food_waste_lessons = get_all_lessons_by_cat_id($food_waste_id);
$recycling_lessons = get_all_lessons_by_cat_id($recycling_id);

$allCategories = get_all_categories();
?>

<!-- Head -->
<?php require_once('templates/head.php'); ?>

<!-- Navigation -->
<?php require_once('templates/navbar.php'); ?>

<section class="container lessons my-5">
    <h2 class="pb-4">Lektionen</h2>
    <p>
        Hier findest du all unsere Lektionen. <br>
        Die Lektionen wurden in verschiedene spannende Themenbereiche aufgeteilt. <br><br>
        Arbeite diese Lektionen durch und teste anschliessend dein Wissen mit unseren Minispielen.<br><br>
        Viel Spass!
    </p>
</section>

<div class="lessons">
    <!-- Energie Lektionen -->
    <div class="energy-section container-fluid">
        <article class="container">
            <a href="category?id=1">
                <h4 class="pb-4 energie">Thema Energie</h4>
            </a>

            <div class="row">
                <?php
                foreach ($energy_lessons as $lesson) {
                    $category =  get_category_by_id($lesson['category_id']);
                ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="card <?php echo strtolower($category['title']); ?>">
                            <?php
                            if ($lesson['einfuerung'] == 1) {
                                echo '<a class="link-title" href="intro?id=' . $lesson["id"] . '">';
                            } else {
                                echo '<a class="link-title" href="lesson?id=' . $lesson["id"] . '">';
                            }
                            ?>
                            <img src="<?php echo $lesson['gif_url_static'] ?>" class="card-img-top gif_static" alt="<?php echo strtolower($category['title']); ?>">
                            <img src="<?php echo $lesson['gif_url'] ?>" class="card-img-top gif" alt="<?php echo strtolower($category['title']); ?>">
                            </a>
                            <div class="card-body">
                                <?php
                                if ($lesson['einfuerung'] == 1) {
                                    echo '<a class="link-title" href="intro?id=' . $lesson["id"] . '">';
                                } else {
                                    echo '<a class="link-title" href="lesson?id=' . $lesson["id"] . '">';
                                }
                                ?>
                                <h5 class="card-title text-center"><?php echo $lesson['title'] ?></h5>
                                </a>
                                <p class="card-text small text-center">
                                    <b><a href="category?id=<?php echo $lesson['category_id']; ?>">
                                            <?php echo "#" . $category['title']; ?>
                                        </a></b>
                                    •
                                    <?php
                                    if ($lesson['einfuerung'] == 1) {
                                        echo "Einführung ";
                                    } else {
                                        echo "Lektion ";
                                        echo $lesson['lesson_nr'];
                                    }
                                    ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </article>
    </div>

    <!-- Lektionen Nachhaltigkeit -->
    <div class="sustainability-section container-fluid">
        <article class="container">
            <a href="category?id=2">
                <h4 class="pb-4 nachhaltigkeit">Thema Nachhaltigkeit</h4>
            </a>
            <div class="row">
                <?php
                foreach ($sustainability_lessons as $lesson) {
                    $category =  get_category_by_id($lesson['category_id']);
                ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="card <?php echo strtolower($category['title']); ?>">
                            <?php
                            if ($lesson['einfuerung'] == 1) {
                                echo '<a class="link-title" href="intro?id=' . $lesson["id"] . '">';
                            } else {
                                echo '<a class="link-title" href="lesson?id=' . $lesson["id"] . '">';
                            }
                            ?>
                            <img src="<?php echo $lesson['gif_url_static'] ?>" class="card-img-top gif_static" alt="<?php echo strtolower($category['title']); ?>">
                            <img src="<?php echo $lesson['gif_url'] ?>" class="card-img-top gif" alt="<?php echo strtolower($category['title']); ?>">
                            </a>
                            <div class="card-body">
                                <?php
                                if ($lesson['einfuerung'] == 1) {
                                    echo '<a class="link-title" href="intro?id=' . $lesson["id"] . '">';
                                } else {
                                    echo '<a class="link-title" href="lesson?id=' . $lesson["id"] . '">';
                                }
                                ?>
                                <h5 class="card-title text-center"><?php echo $lesson['title'] ?></h5>
                                </a>
                                <p class="card-text small text-center">
                                    <b><a href="category?id=<?php echo $lesson['category_id']; ?>">
                                            <?php echo "#" . $category['title']; ?>
                                        </a></b>
                                    •
                                    <?php
                                    if ($lesson['einfuerung'] == 1) {
                                        echo "Einführung ";
                                    } else {
                                        echo "Lektion ";
                                        echo $lesson['lesson_nr'];
                                    }
                                    ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </article>
    </div>

    <!-- Lektionen Klimawandel -->
    <div class="climate-section container-fluid">
        <article class="container">
            <a href="category?id=3">
                <h4 class="pb-4 klimawandel">Thema Klimawandel</h4>
            </a>
            <div class="row">
                <?php
                foreach ($climate_lessons as $lesson) {
                    $category =  get_category_by_id($lesson['category_id']);
                ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="card <?php echo strtolower($category['title']); ?>">
                            <?php
                            if ($lesson['einfuerung'] == 1) {
                                echo '<a class="link-title" href="intro?id=' . $lesson["id"] . '">';
                            } else {
                                echo '<a class="link-title" href="lesson?id=' . $lesson["id"] . '">';
                            }
                            ?>
                            <img src="<?php echo $lesson['gif_url_static'] ?>" class="card-img-top gif_static" alt="<?php echo strtolower($category['title']); ?>">
                            <img src="<?php echo $lesson['gif_url'] ?>" class="card-img-top gif" alt="<?php echo strtolower($category['title']); ?>">
                            </a>
                            <div class="card-body">
                                <?php
                                if ($lesson['einfuerung'] == 1) {
                                    echo '<a class="link-title" href="intro?id=' . $lesson["id"] . '">';
                                } else {
                                    echo '<a class="link-title" href="lesson?id=' . $lesson["id"] . '">';
                                }
                                ?>
                                <h5 class="card-title text-center"><?php echo $lesson['title'] ?></h5>
                                </a>
                                <p class="card-text small text-center">
                                    <b><a href="category?id=<?php echo $lesson['category_id']; ?>">
                                            <?php echo "#" . $category['title']; ?>
                                        </a></b>
                                    •
                                    <?php
                                    if ($lesson['einfuerung'] == 1) {
                                        echo "Einführung ";
                                    } else {
                                        echo "Lektion ";
                                        echo $lesson['lesson_nr'];
                                    }
                                    ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </article>
    </div>

    <!-- Lektionen FoodWaste -->
    <div class="food-waste-section container-fluid">
        <article class="container">
            <a href="category?id=4">
                <h4 class="pb-4 food-waste">Thema Food-Waste</h4>
            </a>
            <div class="row">
                <?php
                foreach ($food_waste_lessons as $lesson) {
                    $category =  get_category_by_id($lesson['category_id']);
                ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="card <?php echo strtolower($category['title']); ?>">
                            <?php
                            if ($lesson['einfuerung'] == 1) {
                                echo '<a class="link-title" href="intro?id=' . $lesson["id"] . '">';
                            } else {
                                echo '<a class="link-title" href="lesson?id=' . $lesson["id"] . '">';
                            }
                            ?>
                            <img src="<?php echo $lesson['gif_url_static'] ?>" class="card-img-top gif_static" alt="<?php echo strtolower($category['title']); ?>">
                            <img src="<?php echo $lesson['gif_url'] ?>" class="card-img-top gif" alt="<?php echo strtolower($category['title']); ?>">
                            </a>
                            <div class="card-body">
                                <?php
                                if ($lesson['einfuerung'] == 1) {
                                    echo '<a class="link-title" href="intro?id=' . $lesson["id"] . '">';
                                } else {
                                    echo '<a class="link-title" href="lesson?id=' . $lesson["id"] . '">';
                                }
                                ?>
                                <h5 class="card-title text-center"><?php echo $lesson['title'] ?></h5>
                                </a>
                                <p class="card-text small text-center">
                                    <b><a href="category?id=<?php echo $lesson['category_id']; ?>">
                                            <?php echo "#" . $category['title']; ?>
                                        </a></b>
                                    •
                                    <?php
                                    if ($lesson['einfuerung'] == 1) {
                                        echo "Einführung ";
                                    } else {
                                        echo "Lektion ";
                                        echo $lesson['lesson_nr'];
                                    }
                                    ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </article>
    </div>

    <!-- Lektionen Recycling -->
    <div class="recycling-section container-fluid">
        <article class="container">
            <a href="category?id=5">
                <h4 class="pb-4 recycling">Thema Recycling</h4>
            </a>
            <div class="row">
                <?php
                foreach ($recycling_lessons as $lesson) {
                    $category =  get_category_by_id($lesson['category_id']);
                ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="card <?php echo strtolower($category['title']); ?>">
                            <?php
                            if ($lesson['einfuerung'] == 1) {
                                echo '<a class="link-title" href="intro?id=' . $lesson["id"] . '">';
                            } else {
                                echo '<a class="link-title" href="lesson?id=' . $lesson["id"] . '">';
                            }
                            ?>
                            <img src="<?php echo $lesson['gif_url_static'] ?>" class="card-img-top gif_static" alt="<?php echo strtolower($category['title']); ?>">
                            <img src="<?php echo $lesson['gif_url'] ?>" class="card-img-top gif" alt="<?php echo strtolower($category['title']); ?>">
                            </a>
                            <div class="card-body">
                                <?php
                                if ($lesson['einfuerung'] == 1) {
                                    echo '<a class="link-title" href="intro?id=' . $lesson["id"] . '">';
                                } else {
                                    echo '<a class="link-title" href="lesson?id=' . $lesson["id"] . '">';
                                }
                                ?>
                                <h5 class="card-title text-center"><?php echo $lesson['title'] ?></h5>
                                </a>
                                <p class="card-text small text-center">
                                    <b><a href="category?id=<?php echo $lesson['category_id']; ?>">
                                            <?php echo "#" . $category['title']; ?>
                                        </a></b>
                                    •
                                    <?php
                                    if ($lesson['einfuerung'] == 1) {
                                        echo "Einführung ";
                                    } else {
                                        echo "Lektion ";
                                        echo $lesson['lesson_nr'];
                                    }
                                    ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </article>
    </div>
</div>


<!-- Footer -->
<?php require_once('templates/footer.php'); ?>