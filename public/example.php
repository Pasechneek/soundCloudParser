<?php

namespace App\Example;

$autoloadPath1 = __DIR__ . '../vendor/autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';

use PhpQuery\PhpQuery;

if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\DomCrawler\Crawler;

function myParser($response)
{
    $content = $response->getContent();
    $crawler = new Crawler($content);

    $crawler = $crawler
        ->filter('body > div');

    $parserResult = [];
    foreach ($crawler as $domElement) {
        $sample = $domElement->textContent;
        $sample = explode("\n", $sample);
        $parserResult[] = $sample;
    }
    return $parserResult;
}

function getArtist($parserResult)
{
    $artist = $parserResult[0][30];
    $artist = explode(" ", $artist);
    $artist = array_filter($artist, fn($item) => $item !== "");
    $artist = implode(" ", $artist);

    return $artist;
}


function starter($url)
{
    $client = HttpClient::create();

    $response = $client->request('GET', $url);

    $statusCode = $response->getStatusCode();

    if ($statusCode == '200') {
       return $response;
    } else {
        dump("something wrong");
        return false;
    }
}

$pages = [
    'https://soundcloud.com/lakeyinspired',
    'https://soundcloud.com/aljoshakonstanty',
    'https://soundcloud.com/birocratic',
    'https://soundcloud.com/dixxy-2',
    'https://soundcloud.com/dekobe'
];

foreach ($pages as $url) {
    $response = starter($url);
    $parserResult = myParser($response);
    $artist = getArtist($parserResult);
    dump($artist);
}

$options = [
    'artist' => [
        ''
    ]
];
