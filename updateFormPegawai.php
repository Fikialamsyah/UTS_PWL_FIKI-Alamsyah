<?php
require_once 'models/Pegawai.php';
$ar_agama = ['islam', 'kristen', 'katolik', 'hindu', 'budha', 'konghucu'];
$obj = new Pegawai();
$dataDivisi = $obj->dataDivisi();
$id = $_REQUEST['id'];
$data_edit = $obj->getPegawai($id);
?>


<form class="card p-3 mb-2" method="POST" action="controllers/pegawaiController.php"">
<h3>Update Data Pegawai</h3>
<hr>
  <div class="form-group row">
    <label for="nip" class="col-4 col-form-label">NIP</label> 
    <div class="col-8">
        <input id="nip" name="nip" type="text" required="required" class="form-control" value="<?= $data_edit['nip']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Pegawai</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control" required="required" value="<?= $data_edit['nama']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" type="text" class="form-control" required="required" value="<?= $data_edit['email']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Agama</label>
    <div class="col-8">
      <?php
      $no = 0;
      foreach ($ar_agama as $agama):
        $cek = ($data_edit['agama'] == $agama) ? "checked" : "";
      ?>
        <div class="custom-control custom-radio custom-control-inline">
          <input name="agama" id="agama_<?= $no; ?>" type="radio" class="custom-control-input" value="<?= $agama; ?>" required="required" <?= $cek; ?>>
          <label for="agama_<?= $no; ?>" class="custom-control-label"><?= $agama ?></label>
        </div>
      <?php $no++;
      endforeach; ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="id_divisi" class="col-4 col-form-label">Divisi</label> 
    <div class="col-8">
      <select id="id_divisi" name="id_divisi" class="custom-select" required="required" >
        <option value="rabbit">--- Pilih ---</option>
        <?php
          foreach($dataDivisi as $divisi):
            $sel = ($data_edit['id_divisi'] == $divisi['id']) ? "selected" : "";
        ?>
        <option value="<?= $divisi['id']; ?>" <?= $sel; ?> ><?= $divisi['nama'];?></option>
        <?php endforeach; ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="foto" class="col-4 col-form-label">Foto</label> 
    <div class="col-8">
      <input id="foto" name="foto" type="text" class="form-control" value="<?= $data_edit['foto']; ?>">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" value="ubah" type="submit" class="btn btn-primary" onclick="return confirm('Anda yakin data ingin diubah ?'); ">Ubah</button>
      <input type="hidden" value="<?= $id; ?>" name="idx">
    </div>
  </div>
</form>