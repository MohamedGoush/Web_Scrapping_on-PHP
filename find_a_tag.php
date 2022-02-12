<?php

include('simple_html_dom.php');

$html = file_get_html("https://www.w3schools.com/css/");

echo $html->find('title',0)."\n"; // It Returns a Title of the Current URL in HTML Formated Text

echo $html->find('title',0)->plaintext."\n"; // It Returns a Title of the Current URL in Readable Text

$left_bar= $html->find('div[id="leftmenuinnerinner"]',0);

foreach($left_bar->find("a") as $html_title){
    echo $html_title->plaintext;
    echo "\n";
}

?>