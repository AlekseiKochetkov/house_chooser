<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RealtyController extends Controller
{
    public function fetchInfoByLink(Request $request)
    {
        $document = new \DOMDocument();
        $document->loadHTMLFile('https://realty.yandex.ru/offer/8041564990388823808/');
        dd($document);
    }
}
