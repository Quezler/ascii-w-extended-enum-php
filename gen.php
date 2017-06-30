<?php

require __DIR__ . '/vendor/autoload.php';

$wikipedia = (new \GuzzleHttp\Client())->get('https://en.wikipedia.org/wiki/List_of_Unicode_characters')->getBody()->getContents();

$crawler = new \Symfony\Component\DomCrawler\Crawler($wikipedia);

$crawler->filter('tr')->each(function (\Symfony\Component\DomCrawler\Crawler $node) {
//    dump($node->html());
//    $code = $node->eq(0);
//    $glyph = $node->eq(1);

//    if ($node->children()) {
//
//        $tds = $node->filter('td');
//        if ($tds && $tds->count() >= 4) {
//            $decimal = $node->filter('td')->eq(2);
////            dump($decimal->html());
//            if ($match = preg_replace("/^&amp;#(\\d{3});&$/", "$1", $decimal->text())) {
//
//                dump($match);
//
////                if (strlen($match) === 3 && $match >= 0 && $match <= 255) {
////                    $tinyint = (int) $match;
////
////                    dump($match);
////                }
//
//
//            }
//        }

//    }

//    if ($decimal)
//        dump($decimal->html());

    // tr has children
    if ($node->children()) {
        $tds = $node->filter('td');

        // check if all required columns are present
        if ($tds->count() === 4 || $tds->count() === 5 || $tds->count() === 6) {

//            if (startsWith($tds->first()->text(), 'U+')) {
            if (strpos($node->html(), 'U+')) {
//                dump($node->html());
//                $html = $tds->eq($tds->count() -3)->text();

                preg_match_all("/&amp;#(\\d{3});/", $node->html(), $matches);

                if (isset($matches[1][0])) {

                    $decimal = (int)$matches[1][0];

//                dump($decimal);
//                dump($node->html());

                    if ($decimal >= 0 && $decimal <= 255) {
                        dump([$decimal => $tds->eq($tds->count() -2)->text()]);
                    }
                }
            }

//            switch($tds->count()) {
//                case 4:
//                    list($code, $decimal, $description, $abbreviation) = $tds;
//                    break;
//                case 5:
//                    list($code, $glyph, $decimal, $description) = $tds;
//                    break;
//            }

        }
    }
});

function startsWith($haystack, $needle)
{
    $length = strlen($needle);
    return (substr($haystack, 0, $length) === $needle);
}
