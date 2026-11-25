<?php

namespace App\classes;

class Products
{
    public $products = [];

    public function __construct()
    {
        $this->products = [
            0 => [
                'id' => 1,
                'name' => 'Smart T Shirt',
                'price' => '2500',
                'description' => 'Smart T Shirt Description',
                'image' => 'assets/img/tshirt.jpg',
            ],
            1 => [
                'id' => 2,
                'name' => 'Smart Watch',
                'price' => '8500',
                'description' => 'Smart Watch Description',
                'image' => 'assets/img/watch.jpg',
            ],
            2 => [
                'id' => 3,
                'name' => 'New Smart Mobile',
                'price' => '58500',
                'description' => 'New Smart Mobile Description',
                'image' => 'assets/img/mobile.jpg',
            ],
            3 => [
                'id' => 4,
                'name' => 'New Headphone',
                'price' => '10500',
                'description' => 'New Headphone Description',
                'image' => 'assets/img/headphone.jpg',
            ],
        ];
    }

    public function getAllProduct()
    {
        return $this->products;
    }

    public function getProductById($id)
    {
        foreach ($this->products as $product) {
            if ($product['id'] == $id) {
                return $product;
            }
        }
    }
}