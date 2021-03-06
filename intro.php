<!-- Controller -->
<?php
require_once('data/data.php');
$lesson = get_lesson_by_id($_GET['id']);
$category =  get_category_by_id($lesson['category_id']);

$video = $lesson['video_url'];

$importance = $lesson['important'];
$important = explode(", ", $importance);

$learning_goals = $lesson['lernziele'];
$learning_goal = explode(", ", $learning_goals);

$biggest_problems = $lesson['groeste_probleme'];
$biggest_problem = explode(", ", $biggest_problems);

$next_lesson_id = $lesson['id'] + 1;
?>

<!-- Head -->
<?php require_once('templates/head.php'); ?>

<!-- Navigation -->
<?php require_once('templates/navbar.php'); ?>

<div class="container lesson <?php echo strtolower($category['title']); ?> my-5">
    <h2 class="pb-4"><?php echo $lesson['title']; ?></h2>
    <div class="row justify-content-center pb-4">
        <div class="col-12">
            <div class="video-wrapper">
                <video id="video" src="<?php echo $video; ?>" controls></video>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-sm-12 order-lg-first">
            <div class="text pb-3">
                <p><?php echo $lesson['text']; ?></p>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12 order-sm-first">
            <div class="info mb-4">
                <?php
                if ($lesson['einfuerung'] == true) { ?>
                    <h4 class="mb-4">Lernziele</h4>
                    <ul>
                        <?php for ($i = 0; $i < count($learning_goal) - 1; ++$i) { ?>
                            <li><?php echo $learning_goal[$i] ?></li>
                        <?php }; ?>
                    </ul>
                    <?php if ($biggest_problems != "") { ?>
                        <h4 class="mb-4">Grösste Probleme</h4>
                        <ul>
                            <?php for ($i = 0; $i < count($biggest_problem) - 1; ++$i) { ?>
                                <li><?php echo $biggest_problem[$i] ?></li>
                            <?php }; ?>
                        </ul>
                    <?php } ?>

                <?php } else { ?>
                    <h4 class="mb-4">Das Wichtigste in Kürze</h4>
                    <ul>
                        <?php for ($i = 0; $i < count($important) - 1; ++$i) { ?>
                            <li><?php echo $important[$i] ?></li>
                        <?php }; ?>
                    </ul>
                <?php } ?>
            </div>
            <div class="row pb-3">
                <div class="col">
                    <a href="category?id=<?php echo $lesson['category_id']; ?>"><img src="assets/img/buttons/uebersicht.svg" alt="Uebersicht"></a>
                </div>
                <div class="col">
                    <a href="<?php echo "lesson?id=$next_lesson_id"; ?>"><img src="assets/img/buttons/starten.svg" alt="Modul starten"></a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Footer -->
<?php require_once('templates/footer.php'); ?>