<?php

declare(strict_types=1);

namespace App\Services;

use App\Http\Controllers\Admin\NewsController;
use App\Services\Contracts\Parser;
use Orchestra\Parser\Xml\Facade as XmlParser;
use SebastianBergmann\CodeCoverage\Report\PHP;

class ParserService implements Parser
{
    private string $link;

    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function saveParseData(): void
    {
        $xml = XmlParser::load($this->link);

        $data = $xml->parse([
            'news' => [
                'uses' => 'channel.item[title,description,category]'
            ]
        ]);

        (new NewsController())->addNewsFromResource($data);
    }
}
