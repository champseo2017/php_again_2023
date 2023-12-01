<?php

// ใช้ __get(), __set()

class product {
    private $data = array();

    public function __set( $name, $value ) {
        $this->data[ $name ] = $value;
    }

    public function __get( $name ) {
        return $this->data[ $name ];
    }

    public function info() {
        $info = '';
        foreach ( $this->data as $data ) {
            $info .= $data . ' ';
        }

        return $info;
    }
}