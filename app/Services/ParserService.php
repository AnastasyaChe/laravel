<?php declare(strict_types=1);
namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Orchestra\Parser\Xml\Facade as XmlParser;

class ParserService 
{
    protected string $url;
    public function setUrl(string $url) {
        $this->url = $url;
        return $this;
    }
    public function parsing() {
        {
            $xml = XmlParser::load($this->url);
            $data = $xml->parse([
                'news' => [
                    'uses' => 'channel.item[title,description,pubDate]'
                ]
            ]);
            $e = explode("/", $this->url);
            $fileName = end($e);
        Storage::append('parsing/' . $fileName . ".txt", json_encode($data));
        return $data;
        }
    }
}