<?php

function scrapp(){
    $html = file_get_contents("");

    $dom = new DOMDocument();
    libxml_use_internal_errors(true);
    $dom->loadHTML($html);
    libxml_clear_errors();
    $var = $dom->saveHTML();

    $path = new DOMXPath($dom);

    $result = $path->query('//*[@class = ""]');

    foreach ($result as $key => $val) {
        # code...
        var_dump($val->nodeValue);
    }
}


?>