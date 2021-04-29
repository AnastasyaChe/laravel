<?php declare(strict_types = 1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Resource;
use App\Services\ParserService;

class ParserOneUrlController extends Controller
{
    public function __invoke(ParserService $service, int $id)

    {   $resource = Resource::find($id);
        $datas = ($service->setUrl($resource->url)->parsing());
            $newsItems =$datas['news'];
            foreach($newsItems as $item) {
                News::create(array(
                    'title' => $item['title'],
                    'text' => $item['description'],
                    'created_at' => $item['pubDate']
                ));
        }
    return redirect()->route('admin.news.index'); 
    }
   
    
}
