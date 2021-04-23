<?php
require_once 'models/Pegawai.php';


$obj = new Pegawai();
$rs = $obj->dataPegawai();

?>

<div class="container card mb-2">
<br>
<h3>Data Produk</h3>
<hr>
<div class="row">
    <div class="col-md-2">
    <?php if($member): ?>
    <a href="index.php?hal=formPegawai" type="button" class="btn btn-success">Tambah Data</a>
    <?php endif; ?>
    </div>
</div>
<br>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nip</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Agama</th>
            <th scope="col">Foto</th>
            <th scope="col">Divisi</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach($rs as $pegawai):
        ?>
        <tr>
            <td><?= $no;?></td>
            <td><?= $pegawai['nip'];?></td>
            <td><?= $pegawai['nama'];?></td>
            <td><?= $pegawai['email'];?></td>
            <td><?= $pegawai['agama'];?></td>
            <td><?= $pegawai['foto'];?></td>
            <td><?= $pegawai['divisi'];?></td>
            <td>
            <form action="controllers/pegawaiController.php" method="POST">
                <a href="index.php?hal=detailPegawai&id=<?= $pegawai['id']; ?>" class="btn btn-info">Detail</a>
                <?php if($member): ?>
                <a href="index.php?hal=updateFormPegawai&id=<?= $pegawai['id']; ?>" class="btn btn-warning">Update</a>
                <?php 
                $role = $member['role'];
                if($role != 'staff'):?>
                <button name="proses" value="hapus" class="btn btn-danger" onclick="return confirm('Anda yakin ingin dihapus ?'); ">Hapus</a>
                <input type="hidden" value="<?= $pegawai['id']; ?>" name="idx">
                <?php endif; ?>
                <?php endif; ?>  
            </form>
            </td>
        </tr>
        <?php $no++; endforeach; ?>
    </tbody>
</table>
</div>