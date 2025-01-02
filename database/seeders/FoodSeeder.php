<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Food;

class FoodSeeder extends Seeder
{
    public function run()
    {
        $food = [
            [
                'name' => 'Nasi Goreng',
                'description' => 'Nasi goreng khas Indonesia dengan bumbu rempah.',
                'price' => 15.00,
                'image_url' => 'https://aslimasako.com/storage/page/new-title-14082023-084547.jpg', // Nasi Goreng
            ],
            [
                'name' => 'Sate Ayam',
                'description' => 'Daging ayam yang dipanggang dengan bumbu kacang.',
                'price' => 20.00,
                'image_url' => 'https://assets.promediateknologi.id/crop/65x428:1002x1434/750x500/webp/photo/2023/03/25/Screenshot_20230325-203938_Instagram-1915831717.jpg', // Sate Ayam
            ],
            [
                'name' => 'Bakso',
                'description' => 'Bakso sapi dengan kuah kaldu gurih.',
                'price' => 10.00,
                'image_url' => 'https://digital-bucket.prod.bfi.co.id/assets/Blog/Usaha%20bakso/Usaha%20bakso.jpg', // Bakso
            ],
            [
                'name' => 'Rendang',
                'description' => 'Daging sapi dimasak dengan santan dan rempah-rempah.',
                'price' => 25.00,
                'image_url' => 'https://cdn.idntimes.com/content-images/community/2022/04/resep-rendang-filosofi-rendang-makna-rendang-arti-rendang-rendang-dari-mana-makanan-indonesia-filosofi-9cde86371d7fc78c91ae80a6ffab250e-e0b9344da253b8e653bd42c7df03d6d9.jpg', // Rendang
            ],
            [
                'name' => 'Ayam Goreng',
                'description' => 'Ayam goreng renyah dengan bumbu khas.',
                'price' => 18.00,
                'image_url' => 'https://www.masakapahariini.com/wp-content/uploads/2023/11/Resep-Ayam-Goreng-Laos-Gurih-dan-Meresap-500x300.jpg', // Ayam Goreng
            ],
            [
                'name' => 'Ayam Mozarella',
                'description' => 'Ayam goreng renyah dengan lelehan keju mozarella.',
                'price' => 18.00,
                'image_url' => 'https://cdn0-production-images-kly.akamaized.net/N8O4Jw8VXGRLZ23bXxAySPo4-1A=/1x59:1000x622/469x260/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4102254/original/072593400_1658890361-shutterstock_1055477633.jpg', // Ayam Goreng
            ],
            [
                'name' => 'Soto Ayam',
                'description' => 'Soto ayam berkuah kuning dengan rempah khas.',
                'price' => 15.00,
                'image_url' => 'https://asset.kompas.com/crops/Bs4oWJdV_9BRvZn1lZQBRWwX5l0=/0x0:1000x667/1200x800/data/photo/2024/01/16/65a5db1f6671b.jpg', // Soto Ayam
            ],
        ];

        foreach ($food as $food) {
            Food::create($food);
        }
    }
}
