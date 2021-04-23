<div class="jumbotron">
    <h1 class="display-4">Selamat Datang <?= isset($member['username']) ? $member['username'] : 'SIMPEG'; ?></h1>
    <p class="lead">Sistem informasi Kepegawaian merupakan sebuah perangkat lunak yang membantu dalam proses pengolahan data kepegawaian, memudahkan dalam melakukan fungsi analisis dan pengawasan kepegawaian.</p>
    <hr class="my-4">
    <?php
        if($member != '') :
    ?>
        <a class="btn btn-primary btn-lg" href="index.php?hal=dataPegawai" role="button">Gets started</a>
    <?php else: ?>
        <a class="btn btn-primary btn-lg" href="index.php?hal=login" role="button">Gets started</a>
    <?php endif;?>    

</div>