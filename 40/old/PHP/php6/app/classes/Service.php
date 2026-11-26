<?php

namespace App\classes;

class Service
{
    public $services = [];

    public function __construct()
    {
        $this->services = [
            0 => [
                'id' => 1,
                "title" => "Responsive Website Design & Development",
                "description" => "Responsive Website  Design & Development description",
                "image" => "assets/img/tshirt.jpg",
                "price" => "26000",
            ],
            1 => [
                'id' => 1,
                "title" => "Desktop App Development",
                "description" => "Desktop App Development description",
                "image" => "assets/img/mobile.jpg",
                "price" => "63000",
            ],
            2 => [
                "id" => 2,
                "title" => "Mobile App Development",
                "description" => "Mobile App Development description",
                "image" => "assets/img/mobile.jpg",
                "price" => "",
            ],
            3 => [
                "id" => 3,
                "title" => "Customized Web App Design & Development",
                "description" => "Customized Web App Design & Development description",
                "image" => "assets/img/headphone.jpg",
                "price" => "10000000",
            ]
        ];

    }

    public function getAllServices()
    {
        return $this->services;
    }

    public function getServiceById($id)
    {
        foreach ($this->services as $service) {
            if ($service['id'] == $id) {
                return $service;
            }
        }
    }
}