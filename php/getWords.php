<?php
$read = file("data/words.txt");
$ctr = 0;
foreach ($read as $line)
{
    $ctr++;
    echo "<tr>";
    echo "<th scope='row'>" . $ctr . "</th>";
    echo "<td>" . $line . "</td>";
    echo "</tr>";
}

?>