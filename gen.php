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
                        $description = $tds->eq($tds->count() -2)->text();

                        // overrides
                        switch ($decimal) {
                            case 24: // Cancel character (collision)
                                $description = 'CAN';
                                break;
                            case 148: // Cancel character (collision)
                                $description = 'CCH';
                                break;
                            case 35: // Number sign, Hashtag, Octothorpe, Sharp (readability)
                                $description = 'Number sign';
                                break;
                        }

                        $chars[$decimal] = $description;
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
    $unicode = str_pad(dechex($tinyint), 4, '0', STR_PAD_LEFT); // 00AC
    $line = sprintf('    const %s = "%s"; // %s', str_pad(str_slug($description, '_'), $maxlen, ' ', STR_PAD_RIGHT), addslashes(utf8_encode(chr($tinyint))), "\u{$unicode}");
    $content .= $line.PHP_EOL;

    switch ($tinyint) {
        case 48: // Full stop
            $content .=  formatConst('period', 'self::full_stop', $maxlen) . PHP_EOL;
            break;
        case 35: // Number sign, Hashtag, Octothorpe, Sharp
            $content .=  formatConst('hashtag', 'self::number_sign', $maxlen) . PHP_EOL;
            $content .=  formatConst('Octothorpe', 'self::number_sign', $maxlen) . PHP_EOL;
            $content .=  formatConst('Sharp', 'self::number_sign', $maxlen) . PHP_EOL;
            break;
    }
}

file_put_contents('src/Ascii.php', $header.$content.$footer);

dump($confirmation = \Quezler\AsciiExtended\Ascii::not_sign);

function formatConst($name, $value, $padding) {
    return sprintf('    const %s = %s;', str_pad(str_slug($name, '_'), $padding, ' ', STR_PAD_RIGHT), $value);
}
