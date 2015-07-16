<?php
include('simple_html_dom.php');
// Create DOM from URL
$html = file_get_html('http://slashdot.org/');

$articles[] = NULL;
// Find all article blocks
foreach($html->find('div.article') as $article) {
    $item['title']     = $article->find('div.title', 0)->plaintext;
    $item['intro']    = $article->find('div.intro', 0)->plaintext;
    $item['details'] = $article->find('div.details', 0)->plaintext;
    $articles[] = $item;
}

print_r($articles); 