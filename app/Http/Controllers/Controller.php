<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $news = [];
    
    protected function getNews() : array
    {
        $faker = Factory::create('ru_Ru');
        
        $categories = $this->getCategories();

        for ($i = 0; $i < 10; $i++) {

            $number = $i + 1;

            $this->news[] = [
                'title' => "Новость {$number}",
                'category_id' => array_rand($categories),
                'description' => $faker->text(100)
            ];
            
        }

        return $this->news;
    } 

    protected function getCategories() : array
    {
        return [
            [
                'id' => 1,
                'name' => 'Политика'
            ],
            [
                'id' => 2,
                'name' => 'Общество'
            ],
            [
                'id' => 3,
                'name' => 'Экономика'
            ],
            [
                'id' => 4,
                'name' => 'Культура'
            ],
            [
                'id' => 5,
                'name' => 'Технологии'
            ],
            [
                'id' => 6,
                'name' => 'Спорт'
            ]
        ];
    }
}
