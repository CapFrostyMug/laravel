<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\JobNewsParsing;
use App\Models\NewsResources;

class ParserController extends Controller
{
    public function getCurrency(NewsResources $resources)
    {
        $url = $resources::query()
            ->get();

        $url->map(function ($item) {
            \dispatch(new JobNewsParsing($item->url));
        });

        return "Parsing completed";
    }
}
