<?php

include('simple_html_dom.php');

$html = file_get_html("https://www.google.com");

echo $html->find('title',0)."\n"; // It Returns a Title of the Current URL in HTML Formated Text

echo $html->find('title',0)->plaintext."\n"; // It Returns a Title of the Current URL in Readable Text



?>