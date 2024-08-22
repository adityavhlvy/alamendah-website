<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Achievement;
use App\Models\Paket;
use App\Models\Activity;
use App\Models\Admin;
use App\Models\Article;
use App\Models\Author;
use App\Models\PaketActivity;
use App\Models\Promocode;
use App\Models\Qna;
use App\Models\Subarticle;
use App\Models\User;
use App\Models\Verifiedaccount;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $data = [
            [
                'question' => 'What is Alamendah Village?',
                'answer' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam veritatis fuga totam dolor atque dolores dolorum, laudantium pariatur soluta repellat fugit, eligendi ea sunt. Fuga aspernatur doloribus ab sunt officiis facere debitis! Ea, id voluptatum ipsa provident quasi animi odio a accusantium vero eum aut facere ipsum, nihil quisquam modi!',
            ],
            [
                'question' => 'Where is Alamendah Village located?',
                'answer' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam veritatis fuga totam dolor atque dolores dolorum, laudantium pariatur soluta repellat fugit, eligendi ea sunt. Fuga aspernatur doloribus ab sunt officiis facere debitis! Ea, id voluptatum ipsa provident quasi animi odio a accusantium vero eum aut facere ipsum, nihil quisquam modi!',
            ],
            [
                'question' => 'How can I get to Alamendah Village?',
                'answer' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam veritatis fuga totam dolor atque dolores dolorum, laudantium pariatur soluta repellat fugit, eligendi ea sunt. Fuga aspernatur doloribus ab sunt officiis facere debitis! Ea, id voluptatum ipsa provident quasi animi odio a accusantium vero eum aut facere ipsum, nihil quisquam modi!',
            ],
            [
                'question' => 'What types of accomodations are available in Alamendah?',
                'answer' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam veritatis fuga totam dolor atque dolores dolorum, laudantium pariatur soluta repellat fugit, eligendi ea sunt. Fuga aspernatur doloribus ab sunt officiis facere debitis! Ea, id voluptatum ipsa provident quasi animi odio a accusantium vero eum aut facere ipsum, nihil quisquam modi!',
            ],
            [
                'question' => 'Are there any restaurants or dining options in Alamendah?',
                'answer' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam veritatis fuga totam dolor atque dolores dolorum, laudantium pariatur soluta repellat fugit, eligendi ea sunt. Fuga aspernatur doloribus ab sunt officiis facere debitis! Ea, id voluptatum ipsa provident quasi animi odio a accusantium vero eum aut facere ipsum, nihil quisquam modi!',
            ],
        ];
        
        foreach($data as $d) {
            Qna::create($d);
        }

    }

}
