<?php
require_once ("Pegawai.php");

class Dosen extends Pegawai{
    protected $nidn;
    protected $jabatan_akademis;

    function __construct($nip,$nama,$nh,$gp,$nidn,$job){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $nh;
        $this->gaji_pokok = $gp;
        $this->nidn = $nidn;
        $this->jabatan_akademis = $job;
    }

    public function mengajar(){

    }
    public function meneliti(){

    }

    public function setNidn($nidn){
        $this->nidn = $nidn;
    }
    public function setJabatanAkademis($jabatan_akademis){
        $this->jabatan_akademis = $jabatan_akademis;
    }
    
    public function getNidn(){
        return $this->nidn;
    }
    public function getJabatanAkademis(){
        return $this->jabatan_akademis;
    }
}

?>