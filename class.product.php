<?php

class Product {
    private $id;
    private $name;

    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }

    public function info() {
        $info = "";
        $lastProperty = end($this); // ตรวจสอบค่าสุดท้ายของ อาร์เรย์ ใช้ฟังก์ชัน end()
        foreach ($this as $key => $value) {
           if ($value == $lastProperty) $info .= $value;
           else $info .= $value . ":";
        }
        return $info;
    }
}