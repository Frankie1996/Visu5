<!-- Controller -->
<?php
require_once('data/data.php');
$about = get_about();
?>

<!-- Head -->
<?php require_once('templates/head.php'); ?>

<!-- Navigation -->
<?php require_once('templates/navbar.php'); ?>
<section class="container data-protection my-5">
    <div class="row">
        <h2 class="pb-4">Datenschutz</h2>
        <div class="col-12">
            <h4>Sicherheit</h4>
            <p>
                Für die Sicherheit der Datenübertragung im Internet können wir keine Gewähr übernehmen.<br>
                Einer Nutzung der im Impressum veröffentlichten Kontaktdaten durch Dritte zu Werbezwecken wird hiermit 
                ausdrücklich widersprochen. Der Betreiber behält sich für den Fall unverlangt zugesandter Werbe- oder 
                Informationsmaterialien ausdrücklich rechtliche Schritte vor.<br>
                Sollten einzelne Regelungen oder Formulierungen dieses Haftungsausschlusses unwirksam sein oder werden, 
                bleiben die übrigen Regelungen in ihrem Inhalt und ihrer Gültigkeit hiervon unberührt.
            </p>
        </div>
        <div class="col-12">
            <h4>Datensammlung</h4>
            <p>
               Auf dieser Website werden keinerlei persönlicher Daten gesammelt.
            </p>
        </div>
</section>

<!-- Footer -->
<?php require_once('templates/footer.php'); ?>
