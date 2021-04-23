<?php
class Pegawai{
    private $koneksi;

    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function dataPegawai(){
        $sql = "SELECT pegawai.*, divisi.nama AS divisi 
                FROM pegawai 
                INNER JOIN divisi on divisi.id = pegawai.id_divisi";
                
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();

        return $rs;
    }

    public function dataDivisi() {
        $sql = "SELECT * FROM divisi";
        $rs = $this->koneksi->query($sql);
        return $rs;
    }

    public function simpan($data){
        $sql = "INSERT INTO pegawai(nip, nama, email, agama, id_divisi, foto)
                VALUES (?,?,?,?,?,?)";
                
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function getPegawai($id){
        $sql = "SELECT pegawai.*, divisi.nama AS divisi
                FROM pegawai
                INNER JOIN divisi on divisi.id = pegawai.id_divisi
                WHERE pegawai.id=?";
        
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();

        return $rs;
    }

    public function ubah($data){
        $sql = "UPDATE pegawai 
                set nip=?, nama=?, email=?, agama=?,id_divisi=?, foto=?
                WHERE id=?";
                
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($id){
        $sql = "DELETE FROM pegawai WHERE id=?";
        
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($id);
    }

    
}