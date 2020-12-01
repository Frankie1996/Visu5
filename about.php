<!-- Controller -->
<?php
require_once('data/data.php');
$about = get_about();
?>

<!-- Head -->
<?php require_once('templates/head.php'); ?>

<!-- Navigation -->
<?php require_once('templates/navbar.php'); ?>
<div class="container-fluid bg px-0">
    <div class="overlay py-5">
        <section class="container about">
            <h2 class="pb-4"><?php echo $about['title']; ?></h2>
            <div class="row">
                <div class="col-lg-6">
                    <h3>Der Auftrag</h3>
                    <p><?php echo $about['text']; ?></p>
                </div>
                <div class="col-lg-6">
                    <h3>Das Projekt</h3>
                    <p><?php echo $about['text']; ?></p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <h3 class="text-center">Die Truppe</h3>
                    <div class="container">
                        <div class="box">
                            <div class="imgBx">
                                <img src="https://i.ibb.co/x1Gth6s/team-1.jpg" alt="">
                            </div>
                            <div class="card-footer">
                                <h4>Delia Schafer</h4>
                            </div>
                        </div>

                        <div class="box">
                            <div class="imgBx">
                                <img src="https://i.ibb.co/VNnNB0P/team-2.jpg" alt="">
                            </div>
                            <div class="card-footer">
                                <h4>Zoe Waltenspül</h4>
                            </div>
                        </div>

                        <div class="box">
                            <div class="imgBx">
                                <img src="https://i.ibb.co/2MP418L/team-3.jpg" alt="">
                            </div>
                            <div class="card-footer">
                                <h4>Ysablle Moser</h4>
                            </div>
                        </div>

                        <div class="box">
                            <div class="imgBx">
                                <img src="https://i.ibb.co/jGcmRHP/team-4.jpg" alt="">
                            </div>
                            <div class="card-footer">
                                <h4>Frank Zinsli</h4>
                            </div>
                        </div>

                        <div class="box">
                            <div class="imgBx">
                                <img src="https://i.ibb.co/jGcmRHP/team-4.jpg" alt="">
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