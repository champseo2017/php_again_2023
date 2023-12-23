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
    
    /* 
    เมื่อสร้างคลาส จะมีคอนสตรักเตอร์ทำงานเป็นอันดับแรก เมื่อวัตถุไม่ถูกใช้งาน ดีสตรักเตอร์ก็ถูกเรียกใช้่งาน เมธอด __destruct ถูกเรียกเมื่อออบเจ็กต์นั้นๆ ไม่ถูกอ้างอิงถึงอีกต่อไป 
    
    */
    function __destruct() {
        echo "Object Destroyed.";
    }
}