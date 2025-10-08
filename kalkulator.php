<?php

class Kalkulator
{
    private $angka1;
    private $angka2;

    public function __construct($angka1, $angka2)
    {
        $this->angka1 = $angka1;
        $this->angka2 = $angka2;
    }

    public function tambah()
    {
        return $this->angka1 + $this->angka2;
    }

    public function kurang()
    {
        return $this->angka1 - $this->angka2;
    }

    public function kali()
    {
        return $this->angka1 * $this->angka2;
    }

    public function bagi()
    {
        if ($this->angka2 == 0) {
            return "Error: Pembagian dengan nol!";
        }
        return $this->angka1 / $this->angka2;
    }
}
