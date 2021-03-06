<!-- Controller -->
<?php
require_once('data/data.php');
$definitions = get_glossar();
?>

<!-- Head -->
<?php require_once('templates/head.php'); ?>

<!-- Navigation -->
<?php require_once('templates/navbar.php'); ?>
<section class="container data-protection my-5">
    <h2 class="pb-4">Glossar</h2>
    <div class="row">
        <div class="col-12">
            <input class="form-control shadow-none" id="searchInput" type="text" <?php
                                                                                    if (isset($_GET["name"])) {
                                                                                        echo 'value=' . $_GET["name"];
                                                                                    } else {
                                                                                        echo 'placeholder="Suchen..."';
                                                                                    } ?>>
            <br>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Begriff</th>
                            <th scope="col">Definition</th>
                        </tr>
                    </thead>
                    <tbody id="glossar_table">
                        <?php
                        foreach ($definitions as $definition) {
                        ?>
                            <tr>
                                <td><?php echo $definition['name']; ?></td>
                                <td><?php echo $definition['definition']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php require_once('templates/footer.php'); ?>