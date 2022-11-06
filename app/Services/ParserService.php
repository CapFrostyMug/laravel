<?php

declare(strict_types=1);

namespace App\Services;

use App\Services\Contracts\Parser;
use Orchestra\Parser\Xml\Facade as XmlParser;

class ParserService implements Parser
{
    private string $link;

    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getParseData(): array
    {
        $xml = XmlParser::load($this->link);
        $data = $xml->parse([
            /*'NumCode' => [
                'uses' => 'Valute.NumCode'
            ],
            'CharCode' => [
                'uses' => 'Valute.CharCode'
            ],
            'Nominal' => [
                'uses' => 'Valute.Nominal'
            ],
            'Name' => [
                'uses' => 'Valute.Name'
            ],*/
            'ValCurs' => [
                'uses' => 'Valute[NumCode,CharCode,Nominal,Name]'
            ]
        ]);

        return $data;
    }
}
