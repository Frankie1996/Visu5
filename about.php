<!-- Controller -->
<?php
require_once('data/data.php');
?>

<!-- Head -->
<?php require_once('templates/head.php'); ?>

<!-- Navigation -->
<?php require_once('templates/navbar.php'); ?>
<div class="container-fluid bg px-0">
    <div class="overlay py-5">
        <section class="container about">

            <div class="btn-group btn-group-toggle mb-2 float-right" data-toggle="buttons">
                <label class="btn btn-outline-light">
                    <input type="radio" name="lang-de" id="lang-de" <?php echo (isset($_GET['de'])) ? "checked" : "" ?>>
                    <a href="about?de=true">DE</a>
                </label>
                <label class="btn btn-outline-light">
                    <input type="radio" name="lang_en" id="lang_en" <?php echo (isset($_GET['en'])) ? "checked" : "" ?>>
                    <a href="about?en=true">EN</a>
                </label>
            </div>

            <?php
            if (isset($_GET['en'])) {
                $about = get_about("2");
                $task = "The Task";
                $project = "The Project";
                $crew = "The Crew";
            } else {
                $about = get_about("1");
                $task = "Der Auftrag";
                $project = "Das Projekt";
                $crew = "Die Truppe";
            }
            ?>
            <h2 class="pb-4"><?php echo $about['title']; ?></h2>
            <div class="row">
                <div class="col-lg-6">
                    <h3><?php echo $task; ?></h3>
                    <p><?php echo $about['task']; ?></p>
                </div>
                <div class="col-lg-6">
                    <h3><?php echo $project; ?></h3>
                    <p><?php echo $about['project']; ?></p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <h3 class="text-center"><?php echo $crew; ?></h3>
                    <div class="container">
                        <div class="box">
                            <div class="imgBx">
                                <img src="https://718373-19.web1.fh-htwchur.ch/wp-content/uploads/2020/04/Delia_Schafer.jpg" alt="Delia Schafer">
                            </div>
                            <div class="card-footer">
                                <h4>Delia Schafer</h4>
                            </div>
                        </div>

                        <div class="box">
                            <div class="imgBx">
                                <img src="https://www.waeldi.ch/public/upload/assets/577/rendition/img_small.jpg" alt="Zoe Waltenspül">
                            </div>
                            <div class="card-footer">
                                <h4>Zoe Waltenspül</h4>
                            </div>
                        </div>

                        <div class="box">
                            <div class="imgBx">
                                <img src="https://www.digezz.ch/projekte/paris-5/images/yssa-profilfoto.png" alt="Ysabelle Moser">
                            </div>
                            <div class="card-footer">
                                <h4>Ysabelle Moser</h4>
                            </div>
                        </div>

                        <div class="box">
                            <div class="imgBx">
                                <img src="https://www.vally.ch/images/profil_frank.jpg" alt="Frank Zinsli">
                            </div>
                            <div class="card-footer">
                                <h4>Frank Zinsli</h4>
                            </div>
                        </div>

                        <div class="box">
                            <div class="imgBx">
                                <img src="https://avatars3.githubusercontent.com/u/51910214?s=460&u=aac2cd5afda73adcd426bfe678ab5e1d7735dbe8&v=4" alt="Sandro Anderes">
                            </div>
                            <div class="card-footer">
                                <h4>Sandro Anderes</h4>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>
    </div>
</div>

<!-- Footer -->
<?php require_once('templates/footer.php'); ?>