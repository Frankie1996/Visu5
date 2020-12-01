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
    <article>
        <h2 class="pb-4">Lektionen</h2>

<!-- Energie Lektionen -->
        <h3 class="pb-4">Thema Energie</h3>
        <div class="row">
            <?php
            foreach ($energy_lessons as $lesson) {
                $category =  get_category_by_id($lesson['category_id']);
            ?>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <?php
                    if ($lesson['einfuerung'] == 1) {
                        echo '<a class="link-title" href="intro.php?id=' . $lesson["id"] . '">';
                    } else {
                        echo '<a class="link-title" href="lesson.php?id=' . $lesson["id"] . '">';
                    }
                    ?>
                    <div class="card <?php echo strtolower($category['title']); ?>">
                        <img src="<?php echo $lesson['gif_url_static'] ?>" class="card-img-top gif_static">
                        <img src="<?php echo $lesson['gif_url'] ?>" class="card-img-top gif">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $lesson['title'] ?></h5>
                            <p class="card-text small text-center">
                                <a href="category.php?id=<?php echo $lesson['category_id']; ?>">
                                    <?php echo "#" . $category['title']; ?>
                                </a>
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
                    </a>
                </div>
            <?php } ?>
        </div>

        <!-- Lektionen Nachhaltigkeit -->
        <h3 class="pb-4">Thema Nachhaltigkeit</h3>
        <div class="row">
            <?php
            foreach ($sustainability_lessons as $lesson) {
                $category =  get_category_by_id($lesson['category_id']);
            ?>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <?php
                    if ($lesson['einfuerung'] == 1) {
                        echo '<a class="link-title" href="intro.php?id=' . $lesson["id"] . '">';
                    } else {
                        echo '<a class="link-title" href="lesson.php?id=' . $lesson["id"] . '">';
                    }
                    ?>
                    <div class="card <?php echo strtolower($category['title']); ?>">
                        <img src="<?php echo $lesson['gif_url_static'] ?>" class="card-img-top gif_static">
                        <img src="<?php echo $lesson['gif_url'] ?>" class="card-img-top gif">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $lesson['title'] ?></h5>
                            <p class="card-text small text-center">
                                <a href="category.php?id=<?php echo $lesson['category_id']; ?>">
                                    <?php echo "#" . $category['title']; ?>
                                </a>
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
                    </a>
                </div>
            <?php } ?>
        </div>

        <!-- Lektionen Klimawandel -->
        <h3 class="pb-4">Thema Klimawandel</h3>
        <div class="row">
            <?php
            foreach ($climate_lessons as $lesson) {
                $category =  get_category_by_id($lesson['category_id']);
            ?>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <?php
                    if ($lesson['einfuerung'] == 1) {
                        echo '<a class="link-title" href="intro.php?id=' . $lesson["id"] . '">';
                    } else {
                        echo '<a class="link-title" href="lesson.php?id=' . $lesson["id"] . '">';
                    }
                    ?>
                    <div class="card <?php echo strtolower($category['title']); ?>">
                        <img src="<?php echo $lesson['gif_url_static'] ?>" class="card-img-top gif_static">
                        <img src="<?php echo $lesson['gif_url'] ?>" class="card-img-top gif">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $lesson['title'] ?></h5>
                            <p class="card-text small text-center">
                                <a href="category.php?id=<?php echo $lesson['category_id']; ?>">
                                    <?php echo "#" . $category['title']; ?>
                                </a>
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
                    </a>
                </div>
            <?php } ?>
        </div>

        <!-- Lektionen FoodWaste -->
        <h3 class="pb-4">Thema Food-Waste</h3>
        <div class="row">
            <?php
            foreach ($food_waste_lessons as $lesson) {
                $category =  get_category_by_id($lesson['category_id']);
            ?>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <?php
                    if ($lesson['einfuerung'] == 1) {
                        echo '<a class="link-title" href="intro.php?id=' . $lesson["id"] . '">';
                    } else {
                        echo '<a class="link-title" href="lesson.php?id=' . $lesson["id"] . '">';
                    }
                    ?>
                    <div class="card <?php echo strtolower($category['title']); ?>">
                        <img src="<?php echo $lesson['gif_url_static'] ?>" class="card-img-top gif_static">
                        <img src="<?php echo $lesson['gif_url'] ?>" class="card-img-top gif">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $lesson['title'] ?></h5>
                            <p class="card-text small text-center">
                                <a href="category.php?id=<?php echo $lesson['category_id']; ?>">
                                    <?php echo "#" . $category['title']; ?>
                                </a>
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
                    </a>
                </div>
            <?php } ?>
        </div>

        <!-- Lektionen Recycling -->
        <h3 class="pb-4">Thema Recycling</h3>
        <div class="row">
            <?php
            foreach ($recycling_lessons as $lesson) {
                $category =  get_category_by_id($lesson['category_id']);
            ?>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <?php
                    if ($lesson['einfuerung'] == 1) {
                        echo '<a class="link-title" href="intro.php?id=' . $lesson["id"] . '">';
                    } else {
                        echo '<a class="link-title" href="lesson.php?id=' . $lesson["id"] . '">';
                    }
                    ?>
                    <div class="card <?php echo strtolower($category['title']); ?>">
                        <img src="<?php echo $lesson['gif_url_static'] ?>" class="card-img-top gif_static">
                        <img src="<?php echo $lesson['gif_url'] ?>" class="card-img-top gif">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?php echo $lesson['title'] ?></h5>
                            <p class="card-text small text-center">
                                <a href="category.php?id=<?php echo $lesson['category_id']; ?>">
                                    <?php echo "#" . $category['title']; ?>
                                </a>
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
                    </a>
                </div>
            <?php } ?>
        </div>

    </article>
</section>

<!-- Footer -->
<?php require_once('templates/footer.php'); ?>