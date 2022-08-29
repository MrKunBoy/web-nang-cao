<?php

class LopObject{
    private $id;
    private $ten_lop;

    public function __construct($row)
    {
        $this->id = $row['id'] ?? '';
        $this->ten_lop = $row['ten_lop'];
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
     * Get the value of ten_lop
     */
    public function getTen_lop()
    {
        return $this->ten_lop;
    }

    /**
     * Set the value of ten_lop
     *
     * @return  self
     */
    public function setTen_lop($ten_lop)
    {
        $this->ten_lop = $ten_lop;

        return $this;
    }
}