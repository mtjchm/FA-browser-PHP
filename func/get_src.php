<?php
//heyyy so this function uses the xfuraffinity embed thingyy
//because using regular furaffinity with my (shitts) php skills was wayyyyy too slow x_x
//and i didn't want to bother with an actual third-party API
//you're free to edit this if you want to use regular FA or an API to get the image links :3
//all it needs to do is take a furaffinity link and spit out an image link
function get_src_x3($nya) {
    $html = file_get_contents(mb_substr($nya, 0, 12)."x".mb_substr($nya, 12));
    $doc = new DOMDocument();
    $doc->loadHTML("<!DOCTYPE html> <html> <head>".$html."</head><body></body></html>");
    $meta = $doc->getElementsByTagName("meta");
    $src = $meta->item($meta->length - 2)->attributes->item(1)->nodeValue;
    return $src;
}