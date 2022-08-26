<?php
$text = "BlablaDesc";
$text = str_replace("\r\n", "\n", $text);

$paragraphs = preg_split("/[\n]{3,}/", $text);
foreach ($paragraphs as $key => $p) {
    $paragraphs[$key] = "<p>" . str_replace("\n", "<br />", $paragraphs[$key]) . "</p>";
}

$text = implode("", $paragraphs);

echo $text;
?>