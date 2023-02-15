<?php
if (isset($_POST['submit']) && $_POST['submit'] === "submit")
{
    if ($_POST['searchBox'] !== null)
    {
        $start = microtime(true);
        $read = file('data/words.txt');
        $search = $_POST['searchBox'];
        $ctr = 0;
        foreach ($read as $line)
        {
            if ($search == trim($line))
            {
                $ctr++;
            }
        }
        echo "<ul id='searchResult' class='list-group list-group-flush rounded-bottom shadow mb-5'><li class='list-group-item list-group-item-light pb-2'>About " . $ctr . " result(s) (" . number_format(microtime(true) - $start, 6) . " seconds)</li>";
        foreach ($read as $line)
        {
            if ($search == trim($line))
            {
                echo "<li class='list-group-item list-group-item-action'>" . $line . "</li>";
            }
        }
        if ($ctr === 0)
        {
            echo "<li class='list-group-item'>No Results Found!</li>";
        }
        echo "</ul>";
        echo "<script>addOverlay();</script>";
    }
    else
    {
        $start = microtime(true);
        echo "<ul id='searchResult' class='list-group list-group-flush rounded-bottom shadow mb-5'><li class='list-group-item list-group-item-light pb-2'>About 0 result(s) (" . number_format(microtime(true) - $start, 6) . " seconds)</li>";
        echo "<li class='list-group-item'>No Results Found!</li>";
        echo "</ul>";
        echo "<script>addOverlay();</script>";
    }
}
?>
