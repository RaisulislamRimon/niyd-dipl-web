<?php

namespace App\Classes;
use App\Classes\Service;
use App\Classes\Portfolio;
use App\classes\Series;

class Welcome
{
    public function index()
    {
        $service = new Service();
        $services = $service->getAllServices();

        $portfolio = new Portfolio();
        $portfolios = $portfolio->getAllPortfolios();

        return view("home", ['services' => $services, 'portfolios' => $portfolios]);
    }

    public function service()
    {
        return view("service");
    }

    public function portfolio()
    {
        return view("portfolio");
    }

    public function about () 
    {
        return view('about');
    }

    public function contact () 
    {
        return view('contact');
    }

    public function login () 
    {
        return view('login');
    }

    public function products () 
    {
        $products = new Products();
        $products = $products->getAllProduct();
        return view('products', ['products' => $products]);
    }

    public function oddEven() 
    {
        return view('odd-even');
    }

    public function series () 
    {
        return view('series');
    }
}