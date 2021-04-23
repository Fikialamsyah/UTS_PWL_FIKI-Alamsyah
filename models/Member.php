<?php
class Member{
    private $koneksi;

    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function cekLogin($data){
        $sql = "SELECT * FROM member 
                WHERE username = ? AND PASSWORD = SHA1(MD5(?))";
        
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
        $rs = $ps->fetch();
        
        return $rs;
    }

    
}