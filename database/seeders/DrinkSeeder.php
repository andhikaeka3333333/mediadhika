<?php

namespace Database\Seeders;

use App\Models\Drink;
use Illuminate\Database\Seeder;

class DrinkSeeder extends Seeder
{
    public function run()
    {
        $drinks = [
            [
                'name' => 'Es Teh',
                'description' => 'Teh yang diseduh dengan gula dengan tambahan es batu.',
                'price' => 15.00,
                'image_url' => 'https://fajar.co.id/wp-content/uploads/2023/09/IMG_0741.jpg',
            ],
            [
                'name' => 'Es Jeruk',
                'description' => 'Jeruk Peras yang dicampur dengan gula dengan tambahan es batu.',
                'price' => 20.00,
                'image_url' => 'https://img-global.cpcdn.com/recipes/d38e9032594d6fc1/400x400cq70/photo.jpg',
            ],
            [
                'name' => 'Es Milo',
                'description' => 'Milo yang diseduh dengan tambahan es batu.',
                'price' => 10.00,
                'image_url' => 'https://images.tokopedia.net/img/cache/500-square/VqbcmM/2021/9/11/14500474-37c1-49da-be7a-60b203dc8382.jpg',
            ],
            [
                'name' => 'Es Susu',
                'description' => 'Susu yang diseduh dengan tambahan es batu.',
                'price' => 25.00,
                'image_url' => 'https://www.allrecipes.com/thmb/LYFXz_HFERg1hYOCyAmFpgNzuuc=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/258686-IcedCaramelMacchiato-ddmps-step-2-4x3-104673-adeb4c23a49f4607b4d50fb5aa00b1e7.jpg',
            ],
            [
                'name' => 'Es Kopi',
                'description' => 'Kopi yang diseduh dan ditambahkan es batu.',
                'price' => 25.00,
                'image_url' => 'https://www.tasteofhome.com/wp-content/uploads/2024/02/Copycat-McDonald-s-Iced-Coffee_EXPS_FT23_273351_ST_3_27_1.jpg',
            ],
        ];

        foreach ($drinks as $drink) {
            Drink::create($drink);
        }
    }
}
