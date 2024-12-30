<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Food;

class FoodSeeder extends Seeder
{
    public function run()
    {
        $foods = [
            [
                'name' => 'Nasi Goreng',
                'description' => 'Nasi goreng khas Indonesia dengan bumbu rempah.',
                'price' => 15.00,
                'image_url' => 'https://tse1.mm.bing.net/th?id=OIP.b881ovKeRrqYdJ8vkCdqBgAAAA&pid=Api', // Nasi Goreng
            ],
            [
                'name' => 'Sate Ayam',
                'description' => 'Daging ayam yang dipanggang dengan bumbu kacang.',
                'price' => 20.00,
                'image_url' => 'https://tse3.mm.bing.net/th?id=OIP.PCKeMpc0FiynROJfJWSwDQHaE8&pid=Api', // Sate Ayam
            ],
            [
                'name' => 'Bakso',
                'description' => 'Bakso sapi dengan kuah kaldu gurih.',
                'price' => 10.00,
                'image_url' => 'https://tse1.mm.bing.net/th?id=OIP.Vuv1wvGozM04mYkJPhEVngHaE-&pid=Api', // Bakso
            ],
            [
                'name' => 'Rendang',
                'description' => 'Daging sapi dimasak dengan santan dan rempah-rempah.',
                'price' => 25.00,
                'image_url' => 'https://tse3.mm.bing.net/th?id=OIP.GJFkY6VEI_XE2k9iGnvMQQHaE8&pid=Api', // Rendang
            ],
            [
                'name' => 'Mie Ayam',
                'description' => 'Mie ayam dengan topping daging ayam cincang.',
                'price' => 12.00,
                'image_url' => 'https://tse2.mm.bing.net/th?id=OIP.J2FkQTnX_h__qYlLhx8DYgHaHa&pid=Api', // Mie Ayam
            ],
            [
                'name' => 'Gado-Gado',
                'description' => 'Salad sayur dengan bumbu kacang khas Indonesia.',
                'price' => 15.00,
                'image_url' => 'https://tse3.mm.bing.net/th?id=OIP.RPrSouXsCn5OKvfysoZQ_QHaHa&pid=Api', // Gado-Gado
            ],
            [
                'name' => 'Ayam Goreng',
                'description' => 'Ayam goreng renyah dengan bumbu khas.',
                'price' => 18.00,
                'image_url' => 'https://tse4.mm.bing.net/th?id=OIP.p0ICcVVkGPVM4r3yE9ACVwHaHW&pid=Api', // Ayam Goreng
            ],
            [
                'name' => 'Nasi Padang',
                'description' => 'Nasi dengan berbagai lauk khas Padang.',
                'price' => 30.00,
                'image_url' => 'https://tse4.mm.bing.net/th?id=OIP.0vJBVo_RA6Qo1XzgST6GPAHaFj&pid=Api', // Nasi Padang
            ],
            [
                'name' => 'Soto Ayam',
                'description' => 'Soto ayam berkuah kuning dengan rempah khas.',
                'price' => 15.00,
                'image_url' => 'https://tse1.mm.bing.net/th?id=OIP.N8fZUtvyj-lnku96Gq8sGgHaHV&pid=Api', // Soto Ayam
            ],
            [
                'name' => 'Pempek',
                'description' => 'Pempek ikan khas Palembang dengan kuah cuko.',
                'price' => 12.00,
                'image_url' => 'https://asset.kompas.com/crops/LPTbmb14tDCmSay2EAvNihccDv0=/0x47:909x653/750x500/data/photo/2020/11/20/5fb76c4aa04bc.jpg', // Pempek
            ],
            [
                'name' => 'Lumpia',
                'description' => 'Lumpia goreng dengan isian sayur dan ayam.',
                'price' => 10.00,
                'image_url' => 'https://tse2.mm.bing.net/th?id=OIP.bSGx0YwbagaDCx7hUc2CRQHaHa&pid=Api', // Lumpia
            ],
            [
                'name' => 'Kerak Telor',
                'description' => 'Makanan khas Betawi dari telor dan kelapa.',
                'price' => 15.00,
                'image_url' => 'https://tse2.mm.bing.net/th?id=OIP.a_dVTMyhr_vf_8TPSq4NaAHaFj&pid=Api', // Kerak Telor
            ],
            [
                'name' => 'Es Teler',
                'description' => 'Es campur dengan kelapa muda, alpukat, dan susu.',
                'price' => 8.00,
                'image_url' => 'https://tse2.mm.bing.net/th?id=OIP.RULf2Xm6H_tG-RpLft1M2QHaEK&pid=Api', // Es Teler
            ],
            [
                'name' => 'Es Cendol',
                'description' => 'Minuman tradisional dengan cendol dan gula merah.',
                'price' => 7.00,
                'image_url' => 'https://tse2.mm.bing.net/th?id=OIP.Sr37d8Z1ThPekKexRUL7YQHaG9&pid=Api', // Es Cendol
            ],
            [
                'name' => 'Martabak Manis',
                'description' => 'Martabak manis dengan aneka topping.',
                'price' => 20.00,
                'image_url' => 'https://tse1.mm.bing.net/th?id=OIP.owAPOqZU7t3cCF8oc4kTRAHaE4&pid=Api', // Martabak Manis
            ],
        ];

        foreach ($foods as $food) {
            Food::create($food);
        }
    }
}
