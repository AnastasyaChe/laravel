<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Services\ParserService;
use Illuminate\Http\Request;

class ParserController extends Controller
{
    public function __invoke(ParserService $service) {
        $datas = ($service->setUrl('https://news.yandex.ru/army.rss')->parsing());
        $newsItems =$datas['news'];
        foreach($newsItems as $item) {
            News::create($item);
            return redirect()->route('admin.news.index');
        }
    }
}
