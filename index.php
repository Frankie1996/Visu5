<!-- Controller -->
<?php
require_once('data/data.php');

$allIntros = get_all_intros();
$topLessons = get_top_lessons();
?>

<!-- Head -->
<?php require_once('templates/head.php'); ?>

<!-- Navigation -->
<?php require_once('templates/navbar.php'); ?>


<header>
    <?php require_once('templates/header.php'); ?>
</header>

<section class="container-fluid my-5">
    <div class="container">
        <h3 class="mb-4">Was wird dich erwarten?</h3>
        <p>
        <b>ökoLOGISCH!</b> ist eine E-Learning-Plattform für Schülerinnen und Schüler der vierten bis zur sechsten Klasse.
        Die Plattform zeigt die immense Bedeutung des Umweltschutzes auf.<br><br>
        Grundsätzlich wird auf dieser Plattform auf das <b><u><a href="./glossar?name=SDG-12" >SDG-12</a></u></b>, also das Nachhaltigkeitsziel 12 des 
        Übereinkommens von Paris, eingegangen. Anhand von verschiedenen Lektionen, wird den Schülern dieses Thema nähergebracht.<br><br>
        
        Im Nachhaltigkeitsziel Nummer 12, geht es um das Thema <b>"Für nachhaltige Konsum- und Produktionsmuster sorgen"</b>. grosse Thema in Themenbereiche 
        unterteilt und diese wiederum in verschiedene Lektionen.<br><br>

        Das Thema wurde in folgende Bereiche unterteilt:
        <ul>
            <li><a href="./category?id=1">Energie</a></li>
            <li><a href="./category?id=2">Nachhaltigkeit</a></li>
            <li><a href="./category?id=3">Klimawandel</a></li>
            <li><a href="./category?id=4">Foodwaste</a></li>
            <li><a href="./category?id=5">Recycling</a></li>
        </ul>
        Starte noch jetzt und erfahre, um was es beim SDG 12 geht.<br><br>
        <a class="btn btn-outline-primary shadow-none" href="./lessons" role="button"><h4 id="start-btn">Jetzt starten</h4></a>
        </p>
    </div>
</section>

<section class="container-fluid featured">
    <div class="container">
        <h3 class="mb-2">Aktuelle Themen</h3>
        <p class="mb-4">Hier zeigen wir dir Lektionen, die ein aktuelles Thema behandeln, neu auf der Plattform aufgeschaltet wurden oder äusserst beliebt bei unseren Nutzern sind.</p>
        <div class="row">
            <?php
            foreach ($topLessons as $lesson) {
                $category =  get_category_by_id($lesson['category_id']);
            ?>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <a class="link-title" href="lesson?id=<?php echo $lesson['id']; ?>">
                        <div class="card <?php echo strtolower($category['title']); ?>">
                            <img src="<?php echo $lesson['gif_url_static'] ?>" class="card-img-top gif_static">
                            <img src="<?php echo $lesson['gif_url'] ?>" class="card-img-top gif">
                            <div class="card-body">
                                <h5 class="card-title text-center"><?php echo $lesson['title'] ?></h5>
                                <p class="card-text small text-center">
                                    <b><a href="category?id=<?php echo $lesson['category_id']; ?>">
                                            <?php echo "#" . $category['title']; ?></b>
                    </a>
                    •
                    <?php
                    echo "Lektion ";
                    echo $lesson['lesson_nr'];
                    ?></p>
                </div>
        </div>
        </a>
    </div>
<?php } ?>
</div>
</div>
</section>
<section class="container-fluid experience">
    <div class="container">
        <h3 class="mb-2">Wissenstest</h3>
        <p class="mb-4">Teste dein erarbeitetes Wissen mit einem Minigame.</p>
        <div class="row">

                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <a class="link-title" href="memory">
                        <div class="card energie">
                            <img src="assets/gif/memory.jpg" class="card-img-top gif_static">
                            <img src="assets/gif/memory.gif" class="card-img-top gif">
                            <div class="card-body">
                                <h5 class="card-title text-center">Memory</h5>
                                <p class="card-text small text-center">
                                    <b><a href="category?id=1">
                                            # Energie</b>
                    </a>
                    •
                    <?php
                    echo "Minigame";
                    ?></p>
                </div>
        </div>
        </a>
    </div>
</div>
</div>
</section>

<!-- Footer -->
<?php require_once('templates/footer.php'); ?>