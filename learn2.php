<?php
/**
 * Created by PhpStorm.
 * User: Eliot
 * Date: 10/19/14
 * Time: 12:14 PM
 */

echo "<html>";
echo "<head>";
echo "</head>";
echo "<body>";

echo <<<myBlock
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

</style>



myBlock;


echo "<div class=\"bold\"> eliot </div>";


echo "</body>";
echo "</html>";