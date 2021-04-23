<?php
require_once '../koneksi.php';
require_once '../models/Pegawai.php';

$nip = $_POST['nip'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$agama = $_POST['agama'];
$divisi = $_POST['id_divisi'];
$foto = $_POST['foto'];
$tombol = $_POST['proses'];

$data = [$nip, $nama, $email, $agama, $divisi, $foto];

$obj = new Pegawai();
switch($tombol){
    case 'simpan':
        $obj->simpan($data);
        break;
    case 'ubah':
        $data[] = $_POST['idx'];
        $obj->ubah($data);
        break;
    case 'hapus':
        $id[] = $_POST['idx'];
        $obj->hapus($id);
        break;
    default:
        header('Location:http://localhost/UTS-PWL-FIKI/index.php?hal=dataPegawai');
        break;
}

header('Location:http://localhost/UTS-PWL-FIKI/index.php?hal=dataPegawai');
?>