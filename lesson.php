<!-- Controller -->
<?php
require_once('data/data.php');
$lesson = get_lesson_by_id($_GET['id']);
$category =  get_category_by_id($lesson['category_id']);

$images = $lesson['img_url'];
$img = explode(", ", $images);

$importance = $lesson['important'];
$important = explode(", ", $importance);

$learning_goals = $lesson['lernziele'];
$learning_goal = explode(", ", $learning_goals);

$biggest_problems = $lesson['groeste_probleme'];
$biggest_problem = explode(", ", $biggest_problems);
?>

<!-- Head -->
<?php require_once('templates/head.php'); ?>

<nav>
    <?php require_once('templates/navbar.php'); ?>
</nav>

<section class="container lesson <?php echo strtolower($category['title']); ?> my-5">
    <h2 class="pb-4"><?php echo $lesson['title']; ?></h2>
    <div class="row">
        <article class="col-lg-6 col-sm-12 order-lg-first">
            <div class="text pb-3">
                <p><?php echo $lesson['text']; ?></p>
            </div>
            <div class="info">
                <?php
                if ($lesson['einfuerung'] == true) { ?>
                    <h3 class="mb-4">Lernziele</h3>
                    <ul>
                        <?php for ($i = 0; $i < count($learning_goal) - 1; ++$i) { ?>
                            <li><?php echo $learning_goal[$i] ?></li>
                        <?php }; ?>
                    </ul>
                    <?php if ($biggest_problems != "") { ?>
                        <h3 class="mb-4">Grösste Probleme</h3>
                        <ul>
                            <?php for ($i = 0; $i < count($biggest_problem) - 1; ++$i) { ?>
                                <li><?php echo $biggest_problem[$i] ?></li>
                            <?php }; ?>
                        </ul>
                    <?php } ?>

                <?php } else { ?>
                    <h3 class="mb-4">Das wichtigste in Kürze</h3>
                    <ul>
                        <?php for ($i = 0; $i < count($important) - 1; ++$i) { ?>
                            <li><?php echo $important[$i] ?></li>
                        <?php }; ?>
                    </ul>
                <?php } ?>
            </div>
        </article>
        <article class="col-lg-6 col-sm-12 order-sm-first">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo $img[0]; ?>" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo $img[1]; ?>" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo $img[2]; ?>" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="signpost">
                <!-- Generator: Adobe Illustrator 25.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 530.72 423.47" style="enable-background:new 0 0 530.72 423.47;" xml:space="preserve">
                    <defs>
                        <linearGradient id="MyGradient" x2="100%" y2="0%">
                            <stop offset="65%" stop-color="#e9c46aff" />
                            <stop offset="65%" stop-color="#FFE8B1" />
                        </linearGradient>
                    </defs>
                    <rect id="Rectangle_15" x="255.9" y="26.24" class="st0" width="18" height="377.12" />
                    <g id="Group_36" transform="translate(1451.955 1133.787)">
                        <path id="Rectangle_14" class="st1" d="M-1204.05-965.43h247c5.52,0,10,4.48,10,10v25c0,5.52-4.48,10-10,10h-247 c-5.52,0-10-4.48-10-10v-25C-1214.05-960.96-1209.58-965.43-1204.05-965.43z" />
                        <g id="Group_33" transform="translate(43.701 9.104)">
                            <path id="Icon_awesome-chevron-circle-right" d="M-1043.7-962.18c5.7,0,10.32,4.62,10.32,10.32s-4.62,10.32-10.32,10.32 s-10.32-4.62-10.32-10.32C-1054.02-957.55-1049.4-962.17-1043.7-962.18C-1043.7-962.18-1043.7-962.18-1043.7-962.18z M-1038.96-952.56l-5.64-5.64c-0.39-0.39-1.02-0.39-1.41,0l-0.71,0.71c-0.39,0.39-0.39,1.02,0,1.41l4.23,4.23l-4.23,4.23 c-0.39,0.39-0.39,1.02,0,1.41l0.71,0.71c0.39,0.39,1.02,0.39,1.41,0l5.64-5.64C-1038.57-951.54-1038.57-952.17-1038.96-952.56 C-1038.96-952.56-1038.96-952.56-1038.96-952.56L-1038.96-952.56z" />
                            <text transform="matrix(1 0 0 1 -1214.7557 -945.0616)" class="st2 st3">Wissen testen</text>
                        </g>
                    </g>
                    <g id="Group_37" transform="translate(1238.911 1074.861)">
                        <path id="Rectangle_13" class="st1" d="M-1209.01-965.51h257c2.76,0,5,2.24,5,5v35c0,2.76-2.24,5-5,5h-257c-2.76,0-5-2.24-5-5v-35 C-1214.01-963.27-1211.77-965.51-1209.01-965.51z" />
                        <g id="Group_34" transform="translate(16.011 8.206)">
                            <text transform="matrix(1 0 0 1 -1176.5577 -945.355)" class="st2 st4">Vorherige Lektion</text>
                            <path id="Icon_awesome-chevron-circle-left" d="M-1204.05-941.52c-5.7,0-10.32-4.62-10.32-10.32s4.62-10.32,10.32-10.32 s10.32,4.62,10.32,10.32C-1193.72-946.14-1198.34-941.52-1204.05-941.52C-1204.04-941.52-1204.04-941.52-1204.05-941.52z M-1208.79-951.13l5.64,5.64c0.39,0.39,1.02,0.39,1.41,0l0.71-0.71c0.39-0.39,0.39-1.02,0-1.41l-4.23-4.23l4.23-4.23 c0.39-0.39,0.39-1.02,0-1.41l-0.71-0.71c-0.39-0.39-1.02-0.39-1.41,0l-5.64,5.64C-1209.18-952.16-1209.18-951.52-1208.79-951.13 C-1208.79-951.13-1208.79-951.13-1208.79-951.13z" />
                        </g>
                    </g>
                    <g>
                        <path id="Path_9" class="st1" d="M138.59,30.81h253.34c4.01,0,7.26,3.25,7.26,7.26c0,0,0,0,0,0v31.21c0,4.01-3.25,7.26-7.26,7.26 l0,0H138.59c-4.01,0-7.26-3.25-7.26-7.26V38.07C131.33,34.06,134.58,30.81,138.59,30.81C138.59,30.81,138.59,30.81,138.59,30.81z" />
                        <g id="Group_32" transform="translate(1407.643 1005.258)">
                            <text transform="matrix(1 0 0 1 -1174.5598 -944.8887)" class="st2 st5">Übersicht</text>
                            <path id="Icon_material-format-list-bulleted" d="M-1212.53-953.63c-1.01,0-1.84,0.82-1.84,1.84s0.82,1.84,1.84,1.84 s1.84-0.82,1.84-1.84C-1210.69-952.81-1211.51-953.63-1212.53-953.63C-1212.53-953.63-1212.53-953.63-1212.53-953.63z M-1212.53-960.98c-1.01,0-1.84,0.82-1.84,1.84c0,1.01,0.82,1.84,1.84,1.84s1.84-0.82,1.84-1.84 C-1210.69-960.15-1211.51-960.98-1212.53-960.98C-1212.53-960.98-1212.53-960.98-1212.53-960.98z M-1212.53-946.29 c-1.01,0-1.84,0.82-1.84,1.84c0,1.01,0.82,1.84,1.84,1.84s1.84-0.82,1.84-1.84C-1210.7-945.47-1211.52-946.29-1212.53-946.29z M-1208.86-943.23h17.13v-2.45h-17.13V-943.23z M-1208.86-950.57h17.13v-2.45h-17.13V-950.57z M-1208.86-960.36v2.44h17.13v-2.45 L-1208.86-960.36z" />
                        </g>
                    </g>
                    <g id="Group_55" transform="translate(1350.896 1225.712)">
                        <g id="Group_36_1_" transform="translate(1451.955 1133.787)">
                            <path id="Rectangle_14_1_" fill="url(#MyGradient)" d="M-2667.72-2099.44h247c5.52,0,10,4.48,10,10v25c0,5.52-4.48,10-10,10h-247 c-5.52,0-10-4.48-10-10v-25C-2677.72-2094.96-2673.24-2099.44-2667.72-2099.44z" />
                            <g id="Group_33_1_" transform="translate(43.701 9.104)">
                                <text transform="matrix(1 0 0 1 -2676.511 -2079.541)" class="st2 st3">Fortschritt - 65%</text>
                            </g>
                        </g>
                    </g>
                    <rect id="Rectangle_15_1_" x="254.36" y="14.24" class="st0" width="21.08" height="12.19" />
                </svg>
            </div>
        </article>
    </div>
</section>


<!-- Footer -->
<?php require_once('templates/footer.php'); ?>