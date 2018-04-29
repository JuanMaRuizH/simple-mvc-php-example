<?php

require_once "ddbb/DBConexion.php";

class Product {
    protected $name;
    protected $cod;
    protected $short_name;
    protected $pvp;
    // private $db;

    public function __construct($row) {
        $this->name = $row["nombre"];
        $this->short_name = $row["short_name"];
        $this->cod = $row["cod"];
        $this->pvp = $row["pvp"];
        // $this->db = DBConexion::connection();
    }

    public static function getAllProducts() {
        $db = DBConexion::connection();
        $data = $db->query("SELECT cod, short_name, nombre, pvp FROM products");
        $products = array();

        while ( $row = $data->fetch_assoc() ) {
            $product = new Product($row);
            $products[] = $product;
        }

        return $products;
    }

    public function getProductName() {
        return $this->name;
    }

    public function getProductCode() {
        return $this->cod;
    }

    public function getProductShortName() {
        return $this->short_name;
    }

    public function getProductPvp() {
        return $this->pvp;
    }
}