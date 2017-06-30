<?php

require __DIR__ . '/vendor/autoload.php';

$wikipedia = (new \GuzzleHttp\Client())->get('https://en.wikipedia.org/wiki/List_of_Unicode_characters')->getBody()->getContents();

$crawler = new \Symfony\Component\DomCrawler\Crawler($wikipedia);

$crawler->filter('tr')->each(function (\Symfony\Component\DomCrawler\Crawler $node) {

    // tr has children
    if ($node->children()) {
        $tds = $node->filter('td');

        // check if all required columns are present
        if ($tds->count() === 4 || $tds->count() === 5 || $tds->count() === 6) {

            // check if row contains the unicode code
            if (strpos($node->html(), 'U+')) {

                // check if row contains a html entity number of length 3
                preg_match_all("/&amp;#(\\d{3});/", $node->html(), $matches);
                if (isset($matches[1][0])) {
                    $decimal = (int)$matches[1][0];

                    // check if number is in the range we intend to use
                    if ($decimal >= 0 && $decimal <= 255) {
                        dump([$decimal => $tds->eq($tds->count() -2)->text()]);
                    }
                }
            }
        }
    }
});
