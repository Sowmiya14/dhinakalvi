<?php
// Create DOM from URL or file
$html = file_get_html('http://www.google.com/');

// Find all images
foreach($html->find('img') as $element)
       echo $element->src . '<br>';

// Find all links
foreach($html->find('a') as $element)
       echo $element->href . '<br>'; 



// Create DOM from string
$html = str_get_html('<div id="hello">Hello</div><div id="world">World</div>');

$html->find('div', 1)->class = 'bar';

$html->find('div[id=hello]', 0)->innertext = 'foo';

echo $html; // Output: <div id="hello">foo</div><div id="world" class="bar">World</div>




// Dump contents (without tags) from HTML
echo file_get_html('http://www.google.com/')->plaintext; 

// Create DOM from URL
$html = file_get_html('http://slashdot.org/');

// Find all article blocks
foreach($html->find('div.article') as $article) {
    $item['title']     = $article->find('div.title', 0)->plaintext;
    $item['intro']    = $article->find('div.intro', 0)->plaintext;
    $item['details'] = $article->find('div.details', 0)->plaintext;
    $articles[] = $item;
}

print_r($articles); 
?>