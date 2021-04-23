<div class="row mt-2">
    <div class="col-md-9">
        <?php
        // tangkap request di URL
        $hal = isset($_GET['hal']) ? $_GET['hal'] : '';

        if (!empty($hal)) {
            include_once $hal . '.php';
        } else {
            include_once 'home.php';
        }
        ?>
    </div>