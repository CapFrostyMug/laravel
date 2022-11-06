<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Contracts\Parser;
use Illuminate\Http\Request;

class ParserController extends Controller
{
    public function getCurrency(Request $request, Parser $parser)
    {
        $currency = $parser->setLink("https://www.cbr-xml-daily.ru/daily_utf8.xml")
            ->getParseData();

        return view('currency')->with('currency', $currency);
    }
}
