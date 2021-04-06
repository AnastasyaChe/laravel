<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected array $newsList = [
        1 => [
            'id' => 1,
            'title' => 'Коалиция',
            'content' => 'Активисты организации «Коалиция за инклюзивный Пакистан» призвали выделить 
            квоты в органах власти для трансгендеров и людей с ограниченными физическими возможностями. ',
            'categoryId' => 3
        ],
        2 => [
            'id' => 2,
            'title' => 'Единая база цифровых профилей ',
            'content' => 'В России создадут Единую информационную платформу учёта иностранных граждан.',
            'categoryId' => 0
        ],
        3 => [
            'id' => 3,
            'title' => 'Навальный',
            'content' => 'За время нахождения в СИЗО «Кольчугино» и в ИК-2 в Покрове Владимирской 
            области Алексей Навальный получил в общей сложности десять выговоров,',
            'categoryId' => 2
        ],
        4 => [
            'id' => 4,
            'title' => 'Конкурс-фестиваль им. Ю. Н. Должикова',
            'content' => 'В таблице перечислены имена конкурсантов, которые получили: 
            гран-при; звание лауреата I степени (1); звание лауреата II степени (2);',
            'categoryId' => 1
        ],
        5 => [
            'id' => 5,
            'title' => 'Globaltrans',
            'content' => 'Globaltrans не будет менять свой подход к выплате дивидендов в 
            2021 году, сообщил финансовый директор Александр Шенец ',
            'categoryId' => 5
        ],
        6 => [
            'id' => 6,
            'title' => 'Храмы Петербурга',
            'content' => 'В прошлом году берега Невы пополнились двумя 
            восстановленными церквями — Свято-Троицкой и Скорбященской.',
            'categoryId' => 4
        ],
        7 => [
            'id' => 7,
            'title' => 'Ростелеком',
            'content' => '«Ростелеком» определён единственным исполнителем осуществляемых 
            в 2021 – 2022 годах закупок для формирования ИКТ-инфраструктуры.',
            'categoryId' => 0
        ],
        8 => [
            'id' => 8,
            'title' => 'Разглашение врачебной тайны',
            'content' => '26 марта 2021 года корреспондент Викиновостей лично столкнулся с разглашением врачебных данных своей матери со стороны работников
             терапевтического отделения поликлиники № 11 Московского района города Казани.',
            'categoryId' => 3
        ]
    ];
    protected array $categoryList = [
        'internet',
        'culture',
        'politics',
        'society',
        'religion',
        'economy'
    ];

    public function getNewsList() 
    {
        return $this->newsList;
    }
}
