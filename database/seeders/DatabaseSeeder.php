<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Paket;
use App\Models\Activity;
use App\Models\Article;
use App\Models\Author;
use App\Models\PaketActivity;
use App\Models\Subarticle;
use App\Models\User;
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
                "name"=>"Activity Name",
                "slogan"=>"Something of a catchy slogan about its travelling adventures",
                "price"=>100000,
                "description"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros, eget tempus orci facilisis id.",
                "img"=>"img/activity-1.png",
                'minimum_person' => 30,
            ],
            [
                "name"=>"Activity Name",
                "slogan"=>"Something of a catchy slogan about its travelling adventures",
                "price"=>100000,
                "description"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros, eget tempus orci facilisis id.",
                "img"=>"img/activity-2.png",
                'minimum_person' => 30,
            ],
            [
                "name"=>"Activity Name",
                "slogan"=>"Something of a catchy slogan about its travelling adventures",
                "price"=>100000,
                "description"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros, eget tempus orci facilisis id.",
                "img"=>"img/activity-3.png",
                'minimum_person' => 30,
            ],
            [
                "name"=>"Activity Name",
                "slogan"=>"Something of a catchy slogan about its travelling adventures",
                "price"=>100000,
                "description"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros, eget tempus orci facilisis id.",
                "img"=>"img/activity.png",
                'minimum_person' => 30,
            ],
            [
                "name"=>"Activity Name",
                "slogan"=>"Something of a catchy slogan about its travelling adventures",
                "price"=>100000,
                "description"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros, eget tempus orci facilisis id.",
                "img"=>"img/activity.png",
                'minimum_person' => 30,
            ],
            [
                "name"=>"Activity Name",
                "slogan"=>"Something of a catchy slogan about its travelling adventures",
                "price"=>100000,
                "description"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros, eget tempus orci facilisis id.",
                "img"=>"img/activity.png",
                'minimum_person' => 30,
            ],
            [
                "name"=>"Activity Name",
                "slogan"=>"Something of a catchy slogan about its travelling adventures",
                "price"=>100000,
                "description"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros, eget tempus orci facilisis id.",
                "img"=>"img/activity.png",
                'minimum_person' => 30,
            ],
            [
                "name"=>"Activity Name",
                "slogan"=>"Something of a catchy slogan about its travelling adventures",
                "price"=>100000,
                "description"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros, eget tempus orci facilisis id.",
                "img"=>"img/activity.png",
                'minimum_person' => 30,
            ],
            [
                "name"=>"Activity Name",
                "slogan"=>"Something of a catchy slogan about its travelling adventures",
                "price"=>100000,
                "description"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros, eget tempus orci facilisis id.",
                "img"=>"img/activity.png",
                'minimum_person' => 30,
            ],
            [
                "name"=>"Activity Name",
                "slogan"=>"Something of a catchy slogan about its travelling adventures",
                "price"=>100000,
                "description"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros, eget tempus orci facilisis id.",
                "img"=>"img/activity.png",
                'minimum_person' => 30,
            ],
            [
                "name"=>"Activity Name",
                "slogan"=>"Something of a catchy slogan about its travelling adventures",
                "price"=>100000,
                "description"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros, eget tempus orci facilisis id.",
                "img"=>"img/activity.png",
                'minimum_person' => 30,
            ],
            [
                "name"=>"Activity Name",
                "slogan"=>"Something of a catchy slogan about its travelling adventures",
                "price"=>100000,
                "description"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros, eget tempus orci facilisis id.",
                "img"=>"img/activity.png",
                'minimum_person' => 30,
            ],
            [
                "name"=>"Activity Name",
                "slogan"=>"Something of a catchy slogan about its travelling adventures",
                "price"=>100000,
                "description"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros, eget tempus orci facilisis id.",
                "img"=>"img/activity.png",
                'minimum_person' => 30,
            ],
            [
                "name"=>"Activity Name",
                "slogan"=>"Something of a catchy slogan about its travelling adventures",
                "price"=>100000,
                "description"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros, eget tempus orci facilisis id.",
                "img"=>"img/activity.png",
                'minimum_person' => 30,
            ],
            [
                "name"=>"Activity Name",
                "slogan"=>"Something of a catchy slogan about its travelling adventures",
                "price"=>100000,
                "description"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros, eget tempus orci facilisis id.",
                "img"=>"img/activity.png",
                'minimum_person' => 30,
            ],
        ];

        foreach($data as $item) {
            Paket::create($item);
        }

        $data = [
            [
                'name' => "Type of Acitivities",
                'description' => "Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum.",
                "img"=>"img/activity.png",
            ],
            [
                'name' => "Type of Acitivities",
                'description' => "Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum.",
                "img"=>"img/activity.png",
            ],
            [
                'name' => "Type of Acitivities",
                'description' => "Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum.",
                "img"=>"img/activity.png",
            ],
            [
                'name' => "Type of Acitivities",
                'description' => "Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum.",
                "img"=>"img/activity.png",
            ],
            [
                'name' => "Type of Acitivities",
                'description' => "Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum.",
                "img"=>"img/activity.png",
            ],
            [
                'name' => "Type of Acitivities",
                'description' => "Lorem ipsum dolor sit amet consectetur adipiscing elit Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum.",
                "img"=>"img/activity.png",
            ],
        ];

        foreach($data as $item) {
            Activity::create($item);
        }

        $data = [
            [
                'paket_id' => 1,
                'activity_id' => 1,
            ],
            [
                'paket_id' => 1,
                'activity_id' => 2,
            ],
            [
                'paket_id' => 1,
                'activity_id' => 3,
            ],
            [
                'paket_id' => 1,
                'activity_id' => 4,
            ],
            [
                'paket_id' => 1,
                'activity_id' => 5,
            ],
            [
                'paket_id' => 1,
                'activity_id' => 6,
            ],
            [
                'paket_id' => 2,
                'activity_id' => 1,
            ],
            [
                'paket_id' => 2,
                'activity_id' => 2,
            ],
            [
                'paket_id' => 2,
                'activity_id' => 3,
            ],
            [
                'paket_id' => 2,
                'activity_id' => 4,
            ],
            [
                'paket_id' => 2,
                'activity_id' => 5,
            ],
            [
                'paket_id' => 2,
                'activity_id' => 6,
            ],
            [
                'paket_id' => 3,
                'activity_id' => 1,
            ],
            [
                'paket_id' => 3,
                'activity_id' => 2,
            ],
            [
                'paket_id' => 3,
                'activity_id' => 3,
            ],
            [
                'paket_id' => 3,
                'activity_id' => 4,
            ],
            [
                'paket_id' => 3,
                'activity_id' => 5,
            ],
            [
                'paket_id' => 3,
                'activity_id' => 6,
            ],
            [
                'paket_id' => 4,
                'activity_id' => 1,
            ],
            [
                'paket_id' => 4,
                'activity_id' => 2,
            ],
            [
                'paket_id' => 4,
                'activity_id' => 3,
            ],
            [
                'paket_id' => 4,
                'activity_id' => 4,
            ],
            [
                'paket_id' => 4,
                'activity_id' => 5,
            ],
            [
                'paket_id' => 4,
                'activity_id' => 6,
            ],
            [
                'paket_id' => 5,
                'activity_id' => 1,
            ],
            [
                'paket_id' => 5,
                'activity_id' => 2,
            ],
            [
                'paket_id' => 5,
                'activity_id' => 3,
            ],
            [
                'paket_id' => 5,
                'activity_id' => 4,
            ],
            [
                'paket_id' => 5,
                'activity_id' => 5,
            ],
            [
                'paket_id' => 5,
                'activity_id' => 6,
            ],
            [
                'paket_id' => 6,
                'activity_id' => 1,
            ],
            [
                'paket_id' => 6,
                'activity_id' => 2,
            ],
            [
                'paket_id' => 6,
                'activity_id' => 3,
            ],
            [
                'paket_id' => 6,
                'activity_id' => 4,
            ],
            [
                'paket_id' => 6,
                'activity_id' => 5,
            ],
            [
                'paket_id' => 6,
                'activity_id' => 6,
            ],
            [
                'paket_id' => 7,
                'activity_id' => 1,
            ],
            [
                'paket_id' => 7,
                'activity_id' => 2,
            ],
            [
                'paket_id' => 7,
                'activity_id' => 3,
            ],
            [
                'paket_id' => 7,
                'activity_id' => 4,
            ],
            [
                'paket_id' => 7,
                'activity_id' => 5,
            ],
            [
                'paket_id' => 7,
                'activity_id' => 6,
            ],
            [
                'paket_id' => 8,
                'activity_id' => 1,
            ],
            [
                'paket_id' => 8,
                'activity_id' => 2,
            ],
            [
                'paket_id' => 8,
                'activity_id' => 3,
            ],
            [
                'paket_id' => 8,
                'activity_id' => 4,
            ],
            [
                'paket_id' => 8,
                'activity_id' => 5,
            ],
            [
                'paket_id' => 8,
                'activity_id' => 6,
            ],
            [
                'paket_id' => 9,
                'activity_id' => 1,
            ],
            [
                'paket_id' => 9,
                'activity_id' => 2,
            ],
            [
                'paket_id' => 9,
                'activity_id' => 3,
            ],
            [
                'paket_id' => 9,
                'activity_id' => 4,
            ],
            [
                'paket_id' => 9,
                'activity_id' => 5,
            ],
            [
                'paket_id' => 9,
                'activity_id' => 6,
            ],
            [
                'paket_id' => 10,
                'activity_id' => 1,
            ],
            [
                'paket_id' => 10,
                'activity_id' => 2,
            ],
            [
                'paket_id' => 10,
                'activity_id' => 3,
            ],
            [
                'paket_id' => 10,
                'activity_id' => 4,
            ],
            [
                'paket_id' => 10,
                'activity_id' => 5,
            ],
            [
                'paket_id' => 10,
                'activity_id' => 6,
            ],
            [
                'paket_id' => 11,
                'activity_id' => 1,
            ],
            [
                'paket_id' => 11,
                'activity_id' => 2,
            ],
            [
                'paket_id' => 11,
                'activity_id' => 3,
            ],
            [
                'paket_id' => 11,
                'activity_id' => 4,
            ],
            [
                'paket_id' => 11,
                'activity_id' => 5,
            ],
            [
                'paket_id' => 11,
                'activity_id' => 6,
            ],
            [
                'paket_id' => 12,
                'activity_id' => 1,
            ],
            [
                'paket_id' => 12,
                'activity_id' => 2,
            ],
            [
                'paket_id' => 12,
                'activity_id' => 3,
            ],
            [
                'paket_id' => 12,
                'activity_id' => 4,
            ],
            [
                'paket_id' => 12,
                'activity_id' => 5,
            ],
            [
                'paket_id' => 12,
                'activity_id' => 6,
            ],
            [
                'paket_id' => 13,
                'activity_id' => 1,
            ],
            [
                'paket_id' => 13,
                'activity_id' => 2,
            ],
            [
                'paket_id' => 13,
                'activity_id' => 3,
            ],
            [
                'paket_id' => 13,
                'activity_id' => 4,
            ],
            [
                'paket_id' => 13,
                'activity_id' => 5,
            ],
            [
                'paket_id' => 13,
                'activity_id' => 6,
            ],
            [
                'paket_id' => 14,
                'activity_id' => 1,
            ],
            [
                'paket_id' => 14,
                'activity_id' => 2,
            ],
            [
                'paket_id' => 14,
                'activity_id' => 3,
            ],
            [
                'paket_id' => 14,
                'activity_id' => 4,
            ],
            [
                'paket_id' => 14,
                'activity_id' => 5,
            ],
            [
                'paket_id' => 14,
                'activity_id' => 6,
            ],
            [
                'paket_id' => 15,
                'activity_id' => 1,
            ],
            [
                'paket_id' => 15,
                'activity_id' => 2,
            ],
            [
                'paket_id' => 15,
                'activity_id' => 3,
            ],
            [
                'paket_id' => 15,
                'activity_id' => 4,
            ],
            [
                'paket_id' => 15,
                'activity_id' => 5,
            ],
            [
                'paket_id' => 15,
                'activity_id' => 6,
            ],
        ];

        foreach($data as $item) {
            PaketActivity::create($item);
        }

        User::factory(3)->create();

        $data = [
            [
                'title' => "The Ultimate Travel Guid to Alamendah: What to See and Do",
                'img' => 'articles-1.png',
            ],
            [
                'title' => "The Untouched Beauty of Alamendah: A Hidden Paradise",
                'img' => 'articles-2.png',
            ],
            [
                'title' => "5 Reasons to Visit Alamendah Village This Year",
                'img' => 'articles-3.png',
            ],
            [
                'title' => "Alamendah's Must See Attractions for First-Time Visitors",
                'img' => 'articles-4.png',
            ],
            [
                'title' => "A Day in Alamendah: Your Perfect Ltinerary for Nature and Culture",
                'img' => 'articles-5.png',
            ],
            [
                'title' => "A Family-Friendly Guide to Exploring Alamendah Village",
                'img' => 'articles-6.png',
            ],
            [
                'title' => "A Weekend Gateway to Alamendah: Embrace Nature and Culture",
                'img' => 'articles-7.png',
            ],
        ];

        foreach($data as $item) {
            Article::create($item);
        }

        $data = [
            [
                'article_id' => 1,
                'user_id' => 1,
            ],
            [
                'article_id' => 1,
                'user_id' => 2,
            ],
            [
                'article_id' => 1,
                'user_id' => 3,
            ],
            [
                'article_id' => 2,
                'user_id' => 1,
            ],
            [
                'article_id' => 2,
                'user_id' => 2,
            ],
            [
                'article_id' => 2,
                'user_id' => 3,
            ],
            [
                'article_id' => 3,
                'user_id' => 1,
            ],
            [
                'article_id' => 3,
                'user_id' => 2,
            ],
            [
                'article_id' => 3,
                'user_id' => 3,
            ],
            [
                'article_id' => 4,
                'user_id' => 1,
            ],
            [
                'article_id' => 4,
                'user_id' => 2,
            ],
            [
                'article_id' => 4,
                'user_id' => 3,
            ],
            [
                'article_id' => 5,
                'user_id' => 1,
            ],
            [
                'article_id' => 5,
                'user_id' => 2,
            ],
            [
                'article_id' => 5,
                'user_id' => 3,
            ],
            [
                'article_id' => 6,
                'user_id' => 1,
            ],
            [
                'article_id' => 6,
                'user_id' => 2,
            ],
            [
                'article_id' => 6,
                'user_id' => 3,
            ],
            [
                'article_id' => 7,
                'user_id' => 1,
            ],
            [
                'article_id' => 7,
                'user_id' => 2,
            ],
            [
                'article_id' => 7,
                'user_id' => 3,
            ],
        ];

        foreach($data as $item) {
            Author::create($item);
        }

        $data = [
            [
                'article_id' => 1,
                'title' => "Welcome to Alamendah: Where Nature Awaits You",
                'description' => "Nestled in the heart of the lush Bandung Regency, Alamendah Village offers a serene escape for those seeking to reconnect with nature. As you take your first steps into this enchanting destination, be prepared to be captivated by its stunning landscapes, vibrant culture, and welcoming community. Whether you're looking to unwind in the tranquility of nature or embark on an adventurous exploration, Alamendah has something special for everyone."
            ],
            [
                'article_id' => 1,
                'title' => "Explore the Natural Wonders",
                'description' => "Alamendah Village is a haven for nature enthusiasts. From the majestic views of Mount Malabar to the tranquil beauty of the Cimahi River, there’s no shortage of breathtaking sights to explore. Hiking trails wind through verdant forests, leading you to hidden waterfalls and panoramic viewpoints that will leave you in awe. Don’t miss the chance to wander through the vibrant tea plantations, where you can learn about the art of tea-making and savor freshly brewed tea right from the source."
            ],
            [
                'article_id' => 1,
                'title' => "Experience Authentic Village Life",
                'description' => "At Alamendah, you have the opportunity to experience traditional Sundanese culture firsthand. Participate in local workshops where skilled artisans demonstrate age-old crafts such as bamboo weaving and batik making. Enjoy traditional dance performances and savor authentic Sundanese cuisine, made from fresh local ingredients. By engaging with the local community, you’ll gain a deeper appreciation for the customs and traditions that define this charming village."
            ],
            [
                'article_id' => 1,
                'title' => "Adventure Awaits: Your Journey Starts Here",
                'description' => "Whether you're an avid hiker, a culture enthusiast, or simply seeking a peaceful retreat, Alamendah Village offers a unique experience that caters to all interests. Immerse yourself in nature's embrace, connect with the vibrant local culture, and create memories that will last a lifetime. Book your trip today and embark on an unforgettable adventure in Alamendah."
            ],
            [
                'article_id' => 2,
                'title' => "Welcome to Alamendah: Where Nature Awaits You",
                'description' => "Nestled in the heart of the lush Bandung Regency, Alamendah Village offers a serene escape for those seeking to reconnect with nature. As you take your first steps into this enchanting destination, be prepared to be captivated by its stunning landscapes, vibrant culture, and welcoming community. Whether you're looking to unwind in the tranquility of nature or embark on an adventurous exploration, Alamendah has something special for everyone."
            ],
            [
                'article_id' => 2,
                'title' => "Explore the Natural Wonders",
                'description' => "Alamendah Village is a haven for nature enthusiasts. From the majestic views of Mount Malabar to the tranquil beauty of the Cimahi River, there’s no shortage of breathtaking sights to explore. Hiking trails wind through verdant forests, leading you to hidden waterfalls and panoramic viewpoints that will leave you in awe. Don’t miss the chance to wander through the vibrant tea plantations, where you can learn about the art of tea-making and savor freshly brewed tea right from the source."
            ],
            [
                'article_id' => 2,
                'title' => "Experience Authentic Village Life",
                'description' => "At Alamendah, you have the opportunity to experience traditional Sundanese culture firsthand. Participate in local workshops where skilled artisans demonstrate age-old crafts such as bamboo weaving and batik making. Enjoy traditional dance performances and savor authentic Sundanese cuisine, made from fresh local ingredients. By engaging with the local community, you’ll gain a deeper appreciation for the customs and traditions that define this charming village."
            ],
            [
                'article_id' => 2,
                'title' => "Adventure Awaits: Your Journey Starts Here",
                'description' => "Whether you're an avid hiker, a culture enthusiast, or simply seeking a peaceful retreat, Alamendah Village offers a unique experience that caters to all interests. Immerse yourself in nature's embrace, connect with the vibrant local culture, and create memories that will last a lifetime. Book your trip today and embark on an unforgettable adventure in Alamendah."
            ],
            [
                'article_id' => 3,
                'title' => "Welcome to Alamendah: Where Nature Awaits You",
                'description' => "Nestled in the heart of the lush Bandung Regency, Alamendah Village offers a serene escape for those seeking to reconnect with nature. As you take your first steps into this enchanting destination, be prepared to be captivated by its stunning landscapes, vibrant culture, and welcoming community. Whether you're looking to unwind in the tranquility of nature or embark on an adventurous exploration, Alamendah has something special for everyone."
            ],
            [
                'article_id' => 3,
                'title' => "Explore the Natural Wonders",
                'description' => "Alamendah Village is a haven for nature enthusiasts. From the majestic views of Mount Malabar to the tranquil beauty of the Cimahi River, there’s no shortage of breathtaking sights to explore. Hiking trails wind through verdant forests, leading you to hidden waterfalls and panoramic viewpoints that will leave you in awe. Don’t miss the chance to wander through the vibrant tea plantations, where you can learn about the art of tea-making and savor freshly brewed tea right from the source."
            ],
            [
                'article_id' => 3,
                'title' => "Experience Authentic Village Life",
                'description' => "At Alamendah, you have the opportunity to experience traditional Sundanese culture firsthand. Participate in local workshops where skilled artisans demonstrate age-old crafts such as bamboo weaving and batik making. Enjoy traditional dance performances and savor authentic Sundanese cuisine, made from fresh local ingredients. By engaging with the local community, you’ll gain a deeper appreciation for the customs and traditions that define this charming village."
            ],
            [
                'article_id' => 3,
                'title' => "Adventure Awaits: Your Journey Starts Here",
                'description' => "Whether you're an avid hiker, a culture enthusiast, or simply seeking a peaceful retreat, Alamendah Village offers a unique experience that caters to all interests. Immerse yourself in nature's embrace, connect with the vibrant local culture, and create memories that will last a lifetime. Book your trip today and embark on an unforgettable adventure in Alamendah."
            ],
            [
                'article_id' => 4,
                'title' => "Welcome to Alamendah: Where Nature Awaits You",
                'description' => "Nestled in the heart of the lush Bandung Regency, Alamendah Village offers a serene escape for those seeking to reconnect with nature. As you take your first steps into this enchanting destination, be prepared to be captivated by its stunning landscapes, vibrant culture, and welcoming community. Whether you're looking to unwind in the tranquility of nature or embark on an adventurous exploration, Alamendah has something special for everyone."
            ],
            [
                'article_id' => 4,
                'title' => "Explore the Natural Wonders",
                'description' => "Alamendah Village is a haven for nature enthusiasts. From the majestic views of Mount Malabar to the tranquil beauty of the Cimahi River, there’s no shortage of breathtaking sights to explore. Hiking trails wind through verdant forests, leading you to hidden waterfalls and panoramic viewpoints that will leave you in awe. Don’t miss the chance to wander through the vibrant tea plantations, where you can learn about the art of tea-making and savor freshly brewed tea right from the source."
            ],
            [
                'article_id' => 4,
                'title' => "Experience Authentic Village Life",
                'description' => "At Alamendah, you have the opportunity to experience traditional Sundanese culture firsthand. Participate in local workshops where skilled artisans demonstrate age-old crafts such as bamboo weaving and batik making. Enjoy traditional dance performances and savor authentic Sundanese cuisine, made from fresh local ingredients. By engaging with the local community, you’ll gain a deeper appreciation for the customs and traditions that define this charming village."
            ],
            [
                'article_id' => 4,
                'title' => "Adventure Awaits: Your Journey Starts Here",
                'description' => "Whether you're an avid hiker, a culture enthusiast, or simply seeking a peaceful retreat, Alamendah Village offers a unique experience that caters to all interests. Immerse yourself in nature's embrace, connect with the vibrant local culture, and create memories that will last a lifetime. Book your trip today and embark on an unforgettable adventure in Alamendah."
            ],
            [
                'article_id' => 5,
                'title' => "Welcome to Alamendah: Where Nature Awaits You",
                'description' => "Nestled in the heart of the lush Bandung Regency, Alamendah Village offers a serene escape for those seeking to reconnect with nature. As you take your first steps into this enchanting destination, be prepared to be captivated by its stunning landscapes, vibrant culture, and welcoming community. Whether you're looking to unwind in the tranquility of nature or embark on an adventurous exploration, Alamendah has something special for everyone."
            ],
            [
                'article_id' => 5,
                'title' => "Explore the Natural Wonders",
                'description' => "Alamendah Village is a haven for nature enthusiasts. From the majestic views of Mount Malabar to the tranquil beauty of the Cimahi River, there’s no shortage of breathtaking sights to explore. Hiking trails wind through verdant forests, leading you to hidden waterfalls and panoramic viewpoints that will leave you in awe. Don’t miss the chance to wander through the vibrant tea plantations, where you can learn about the art of tea-making and savor freshly brewed tea right from the source."
            ],
            [
                'article_id' => 5,
                'title' => "Experience Authentic Village Life",
                'description' => "At Alamendah, you have the opportunity to experience traditional Sundanese culture firsthand. Participate in local workshops where skilled artisans demonstrate age-old crafts such as bamboo weaving and batik making. Enjoy traditional dance performances and savor authentic Sundanese cuisine, made from fresh local ingredients. By engaging with the local community, you’ll gain a deeper appreciation for the customs and traditions that define this charming village."
            ],
            [
                'article_id' => 5,
                'title' => "Adventure Awaits: Your Journey Starts Here",
                'description' => "Whether you're an avid hiker, a culture enthusiast, or simply seeking a peaceful retreat, Alamendah Village offers a unique experience that caters to all interests. Immerse yourself in nature's embrace, connect with the vibrant local culture, and create memories that will last a lifetime. Book your trip today and embark on an unforgettable adventure in Alamendah."
            ],
            [
                'article_id' => 6,
                'title' => "Welcome to Alamendah: Where Nature Awaits You",
                'description' => "Nestled in the heart of the lush Bandung Regency, Alamendah Village offers a serene escape for those seeking to reconnect with nature. As you take your first steps into this enchanting destination, be prepared to be captivated by its stunning landscapes, vibrant culture, and welcoming community. Whether you're looking to unwind in the tranquility of nature or embark on an adventurous exploration, Alamendah has something special for everyone."
            ],
            [
                'article_id' => 6,
                'title' => "Explore the Natural Wonders",
                'description' => "Alamendah Village is a haven for nature enthusiasts. From the majestic views of Mount Malabar to the tranquil beauty of the Cimahi River, there’s no shortage of breathtaking sights to explore. Hiking trails wind through verdant forests, leading you to hidden waterfalls and panoramic viewpoints that will leave you in awe. Don’t miss the chance to wander through the vibrant tea plantations, where you can learn about the art of tea-making and savor freshly brewed tea right from the source."
            ],
            [
                'article_id' => 6,
                'title' => "Experience Authentic Village Life",
                'description' => "At Alamendah, you have the opportunity to experience traditional Sundanese culture firsthand. Participate in local workshops where skilled artisans demonstrate age-old crafts such as bamboo weaving and batik making. Enjoy traditional dance performances and savor authentic Sundanese cuisine, made from fresh local ingredients. By engaging with the local community, you’ll gain a deeper appreciation for the customs and traditions that define this charming village."
            ],
            [
                'article_id' => 6,
                'title' => "Adventure Awaits: Your Journey Starts Here",
                'description' => "Whether you're an avid hiker, a culture enthusiast, or simply seeking a peaceful retreat, Alamendah Village offers a unique experience that caters to all interests. Immerse yourself in nature's embrace, connect with the vibrant local culture, and create memories that will last a lifetime. Book your trip today and embark on an unforgettable adventure in Alamendah."
            ],
            [
                'article_id' => 7,
                'title' => "Welcome to Alamendah: Where Nature Awaits You",
                'description' => "Nestled in the heart of the lush Bandung Regency, Alamendah Village offers a serene escape for those seeking to reconnect with nature. As you take your first steps into this enchanting destination, be prepared to be captivated by its stunning landscapes, vibrant culture, and welcoming community. Whether you're looking to unwind in the tranquility of nature or embark on an adventurous exploration, Alamendah has something special for everyone."
            ],
            [
                'article_id' => 7,
                'title' => "Explore the Natural Wonders",
                'description' => "Alamendah Village is a haven for nature enthusiasts. From the majestic views of Mount Malabar to the tranquil beauty of the Cimahi River, there’s no shortage of breathtaking sights to explore. Hiking trails wind through verdant forests, leading you to hidden waterfalls and panoramic viewpoints that will leave you in awe. Don’t miss the chance to wander through the vibrant tea plantations, where you can learn about the art of tea-making and savor freshly brewed tea right from the source."
            ],
            [
                'article_id' => 7,
                'title' => "Experience Authentic Village Life",
                'description' => "At Alamendah, you have the opportunity to experience traditional Sundanese culture firsthand. Participate in local workshops where skilled artisans demonstrate age-old crafts such as bamboo weaving and batik making. Enjoy traditional dance performances and savor authentic Sundanese cuisine, made from fresh local ingredients. By engaging with the local community, you’ll gain a deeper appreciation for the customs and traditions that define this charming village."
            ],
            [
                'article_id' => 7,
                'title' => "Adventure Awaits: Your Journey Starts Here",
                'description' => "Whether you're an avid hiker, a culture enthusiast, or simply seeking a peaceful retreat, Alamendah Village offers a unique experience that caters to all interests. Immerse yourself in nature's embrace, connect with the vibrant local culture, and create memories that will last a lifetime. Book your trip today and embark on an unforgettable adventure in Alamendah."
            ],
        ];

        foreach($data as $item) {
            Subarticle::create($item);
        }

    }

}
