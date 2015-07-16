<?php
include('simple_html_dom.php');
// Create DOM from URL
$html = file_get_html('https://www.nse.co.ke/');

$articles[] = NULL;
//Find all article blocks
// foreach($html->find('.marquee') as $article) {
//     $item['title']     = $article->find('div.title', 0)->plaintext;
//     $item['intro']    = $article->find('div.intro', 0)->plaintext;
//     $item['details'] = $article->find('div.details', 0)->plaintext;
//     $articles[] = $item;
// }

//print_r($articles); 

//echo count($articles);

//echo $html->getElementById("div.mycrawler")->childNodes(1)->childNodes(1)->childNodes(2)->getAttribute('id'); 
//print_r($html->find('div.marquee',0)->find('span',0));
echo count($html->find('div.marquee a span'));

//print_r($html->find('div.marquee a span'));