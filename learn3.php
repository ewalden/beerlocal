<?php
/**
 * Created by PhpStorm.
 * User: Eliot
 * Date: 10/19/14
 * Time: 12:14 PM
 */

define ("COMPANY", "ELW SOLUTIONS");

echo "<html>";
echo "<head>";
echo "</head>";
echo "<body>";

$styles = "
<style>
.bold {
    font-weight: bold;
}

.p10 {
    padding-left: 10px;
    padding-right; 10px;
}
.left {
    float: left;
}
.clear {
    clear: both;
}

</style>
";

echo $styles;


$eol = "<br />\n";
$debug = false;

echo "<div class=\"bold p10 left\"> eliot from " ;
echo COMPANY;
echo "</div>\n";

//echo "<div class=\"bold p10 left\"> eliot from " . COMPANY . "</div>\n";

echo "<div class=\"bold p10 left\"> DAD </div>\n";
echo "<div class='clear'></div>\n";
echo "<div class=\"bold p10 left\"> eliot </div>\n";
echo "<div class=\"bold p10 left\"> DAD </div>\n";

echo $eol;

$x = 'hey';
$y = "there";

echo $x, $y, $eol;
echo '$x='.$x.$eol;

echo '$x $y $eol';
echo $eol;
echo "x=$x             y=$y $eol";
echo $x.$y.$eol;

if ($debug) {
    var_dump ($x);
    print_r($x);
}

echo "</body>";
echo "</html>";