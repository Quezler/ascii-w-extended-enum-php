<?php

require __DIR__ . '/vendor/autoload.php';

$wikipedia = (new \GuzzleHttp\Client())->get('https://en.wikipedia.org/wiki/List_of_Unicode_characters')->getBody()->getContents();

$crawler = new \Symfony\Component\DomCrawler\Crawler($wikipedia);

/**
 * 0...255 => "description"
 */
$chars = [];

$crawler->filter('tr')->each(function (\Symfony\Component\DomCrawler\Crawler $node) use (&$chars) {

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
                        $chars[$decimal] = $description = $tds->eq($tds->count() -2)->text();
                    }
                }
            }
        }
    }
});

// longest description in array, will pad all to this.
$maxlen = max(array_map('strlen', $chars));

$header = <<<'TAG'
<?php

namespace Quezler\AsciiExtended;

class Ascii {

TAG;

$content = '';

$footer = <<<'TAG'
};

TAG;


foreach ($chars as $tinyint => $description) {
    $line = sprintf('    const %s = \'%s\'; // %d', str_pad(str_slug($description), $maxlen, ' ', STR_PAD_RIGHT), chr($tinyint), $tinyint);
    $content .= $line.PHP_EOL;
}

file_put_contents('src/Ascii.php', $header.$content.$footer);
