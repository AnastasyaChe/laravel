<?php

namespace App\Http\Controllers;

use App\Jobs\NewsParsing;
use App\Models\News;
use App\Services\ParserService;
use Illuminate\Http\Request;

class ParserController extends Controller
{
    public function __invoke(ParserService $service)
    { $rssLinks = [
            'https://news.yandex.ru/auto.rss',
            'https://news.yandex.ru/auto_racing.rss',
            'https://news.yandex.ru/army.rss',
            'https://news.yandex.ru/gadgets.rss',
            'https://news.yandex.ru/index.rss',
            'https://news.yandex.ru/martial_arts.rss',
            'https://news.yandex.ru/communal.rss',
            'https://news.yandex.ru/health.rss',
            'https://news.yandex.ru/games.rss',
            'https://news.yandex.ru/internet.rss',
            'https://news.yandex.ru/cyber_sport.rss',
            'https://news.yandex.ru/movies.rss',
            'https://news.yandex.ru/cosmos.rss',
            'https://news.yandex.ru/culture.rss',
            'https://news.yandex.ru/fire.rss',
            'https://news.yandex.ru/championsleague.rss',
            'https://news.yandex.ru/music.rss',
            'https://news.yandex.ru/nhl.rss',
            ];
        foreach($rssLinks as $link) {
            NewsParsing::dispatch($link);
        } 
        echo "Спасибо";
    }
        

    // public function __invoke(ParserService $service)
    // {  $datas = ($service->setUrl('https://news.yandex.ru/nhl.rss')->parsing());
    //     $newsItems =$datas['news'];
    //     foreach($newsItems as $item) {
    //         News::create(array(
    //             'title' => $item['title'],
    //             'text' => $item['description'],
    //             'created_at' => $item['pubDate']
    //         ));
    //         // // return redirect()->route('admin.news.index');
    //     }
    //     echo "textt2";
        
    // }
    
}
