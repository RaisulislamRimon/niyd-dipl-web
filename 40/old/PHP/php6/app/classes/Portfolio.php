<?php

namespace App\classes;

class Portfolio
{
    public $portfolios = [];

    public function __construct()
    {
        $this->portfolios = [
            0 => [
                'id' => 1,
                'project_name' => 'Responsive Website Design & Development',
                'client_name' => 'Tech Solutions Ltd.',
                'project_cost' => '26000',
                'project_image' => 'https://i.postimg.cc/1RHk3bgD/J31vwb-Al0B8UQQT4Vseq-Qyq3Ln-Bf-YDp-A5Uk7-4r3QCco-Zo-IN4j-Ltw-EOx-Zo4Qn0Thgjs-Ib-HZc-Sa-Mlm-ACm7-VL.jpg',
                'project_duration' => '15 Days',
                'price' => '26000',
            ],

            1 => [
                'id' => 2,
                'project_name' => 'Desktop Application Development',
                'client_name' => 'Creative IT Institute',
                'project_cost' => '63000',
                'project_image' => 'https://i.postimg.cc/W1QKyvKG/Zo-IIea-GGMB5m-CMyv-A53YE-h-Kr-O8FPNt-J91b-Ve-Nd2G8cgm4EAt-Wa-ZXdf-B2X8As-EH0mf-QOMYmi-RA3e6MB4APji.jpg',
                'project_duration' => '30 Days',
                'price' => '63000',
            ],

            2 => [
                'id' => 3,
                'project_name' => 'Mobile App Development',
                'client_name' => 'Smart Business Ltd.',
                'project_cost' => '45000',
                'project_image' => 'https://i.postimg.cc/hvP3mPJ3/wvt0SRk47c-Cey-OAAz9fp-Akw7Pmm18c-Lh-E13FHzs-JT7Zn-E0rm-Hq4-Wyim-OAXBAre-R9mc6J3kq-A4f-da1u-J-OHKNS1.jpg',
                'project_duration' => '25 Days',
                'price' => '45000',
            ],

            3 => [
                'id' => 4,
                'project_name' => 'Customized Web Application Development',
                'client_name' => 'Digital Marketing Agency',
                'project_cost' => '100000',
                'project_image' => 'https://i.postimg.cc/QxznBDjq/Jt-Ms-SPRId-U6h-AS2Dgj-W78P0Kuxc893-oj-GCz-Ud-SVvvm-r2HPfuh-PTpc1d-GV2Al-U8GDx-Srk-P4t-Gr-AXAHB6moq.jpg',
                'project_duration' => '60 Days',
                'price' => '100000',
            ],
        ];
    }

    public function getAllPortfolios()
    {
        return $this->portfolios;
    }

    public function getPortfolioById($id)
    {
        foreach ($this->portfolios as $portfolio) {
            if ($portfolio['id'] == $id) {
                return $portfolio;
            }
        }
    }
}