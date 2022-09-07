<?php
$text = "BlablaDesc";
$text = str_replace("\r\n", "\n", $text);

$paragraphs = preg_split("/[\n]{3,}/", $text);
foreach ($paragraphs as $key => $p) {
    $paragraphs[$key] = "<p>" . str_replace("\n", "<br />", $paragraphs[$key]) . "</p>";
}

$text = implode("", $paragraphs);

echo $text;



$get1 = $_GET["pageno"];
$get2 = $_GET["search"];
$get3 = $_GET["location"];
$get4 = $_GET["ownership"];
$get5 = $_GET["minbed"];
$get6 = $_GET["maxbed"];
$get7 = $_GET["minprice"];
$get8 = $_GET["maxprice"];
$get9 = $_GET["minland"];
$get10 = $_GET["maxland"];
?>