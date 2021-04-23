<?php
require_once 'models/Pegawai.php';

$id = $_REQUEST['id'];
$obj = new Pegawai();
$rs = $obj->getPegawai($id);

?>
<div class="container card p-3">
    <div class="team-single">
        <div class="row">
            <div class="col-lg-4 col-md-5 xs-margin-30px-bottom">
                <div class="team-single-img">
                <?php 
                    $foto = (!empty($rs['foto'])) ? $rs['foto'] : "no_image.jpg";
                ?>
                    <img src="images/<?= $foto; ?>" width="100%" height="300" alt="">

                </div>
                <div class="bg-light-gray padding-30px-all md-padding-25px-all sm-padding-20px-all text-center mt-2">
                    <h4 class="margin-10px-bottom font-size24 md-font-size22 sm-font-size20 font-weight-600">Divisi <?= $rs['divisi']; ?></h4>
                </div>
            </div>

            <div class="col-lg-8 col-md-7">
                <div class="team-single-text padding-50px-left sm-no-padding-left">
                <h4 class="font-size38 sm-font-size32 xs-font-size30 mb-3">Detail Pegawai</h4>
                    <div class="contact-info-section margin-40px-tb">
                        <ul class="list-style9 no-margin">
                            <li>
                                <div class="row">
                                    <div class="col-md-5 col-5">
                                    <i class="far fa-id-badge"></i>
                                        </i><strong class="margin-10px-left text-orange"> NIP :</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p><?= $rs['nip']; ?></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="far fa-address-card"></i>
                                        </i><strong class="margin-10px-left text-orange"> Nama :</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p><?= $rs['nama']; ?></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-envelope text-pink"></i>
                                        <strong class="margin-10px-left xs-margin-four-left text-pink"> Email:</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p><a href="" class="email"><?= $rs['email']; ?></a></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-praying-hands"></i>
                                        <strong class="margin-10px-left xs-margin-four-left text-pink"> Agama:</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p><?= $rs['agama']; ?></p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="kembali">
                <a href="index.php?hal=dataPegawai" class="btn btn-info">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>