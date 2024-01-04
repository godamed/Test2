<?php 

Abstract class Produk {
    protected  $judul, 
            $penulis,
            $penerbit,
            $diskon = 0,     
            $harga;
    
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit ="penerbit", $harga="harga")
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    public function getJudul(){
        return $this->judul;
    }
    
    public function setJudul($judul){
        if(!is_string($judul)){
        throw new Exception("Judul Harus String");
        }
        $this->judul = $judul;
    }
    
    public function getPenulis(){
        return $this->penulis;
    }
    
    public function setPenulis($penulis){
        if(!is_string($penulis)){
        throw new Exception("Penulis Harus String");
        }
        $this->penulis = $penulis;
    }
    
    public function getPenerbit(){
        return $this->penerbit;
    }
    
    public function setPenerbit($penerbit){
        if(!is_string($penerbit)){
        throw new Exception("Penulis Harus String");
        }
        $this->penerbit = $penerbit;
    }
    
    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    
    public function setHarga($harga){
        if(!is_double()($harga)){
        throw new Exception("Harga Harus Angka");
        }
        $this->harga = $harga;
    }
    
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
    
    abstract public function getInfo();
    
    public function getDiskon(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    
    public function setDiskon($diskon){
        $this->diskon = $diskon;
       }
    
    
    }

    