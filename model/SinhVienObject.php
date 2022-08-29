<?php

class SinhVienObject{
    private $id;
    private $ten_sv;
    private $ma_lop;
    private $ngay_sinh;
    private $ten_lop;

    public function __construct($row)
    {
        $this->id = $row['id'] ?? '';
        $this->ten_sv = $row['ten_sv'];
        $this->ma_lop = $row['ma_lop'];
        $this->ngay_sinh = $row['ngay_sinh'];
        $this->ten_lop = $row['ten_lop'] ?? '';
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function showId()
    {
        return '#' . $this->id;
    }    

    /**
     * Get the value of ten_sv
     */ 
    public function getTen_sv()
    {
        return $this->ten_sv;
    }

    /**
     * Set the value of ten_sv
     *
     * @return  self
     */ 
    public function setTen_sv($ten_sv)
    {
        $this->ten_sv = $ten_sv;

        return $this;
    }

    /**
     * Get the value of ma_lop
     */ 
    public function getMa_lop()
    {
        return $this->ma_lop;
    }

    /**
     * Set the value of ma_lop
     *
     * @return  self
     */ 
    public function setMa_lop($ma_lop)
    {
        $this->ma_lop = $ma_lop;

        return $this;
    }

    /**
     * Get the value of ngay_sinh
     */ 
    public function getNgay_sinh()
    {
        return $this->ngay_sinh;
    }

    /**
     * Set the value of ngay_sinh
     *
     * @return  self
     */ 
    public function setNgay_sinh($ngay_sinh)
    {
        $this->ngay_sinh = $ngay_sinh;

        return $this;
    }

    /**
     * Get the value of ten_lop
     */ 
    public function getTen_lop()
    {
        return $this->ten_lop;
    }
}