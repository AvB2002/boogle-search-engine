<?php
$myFile = "../data/words.txt";
if (isset($_POST['inputNum1']) && isset($_POST['inputNum2']) && isset($_POST['inputNum3']) && isset($_POST['inputNum4']) && isset($_POST['inputNum5']) && isset($_POST['inputNum6']) && isset($_POST['inputNum7']) && isset($_POST['inputNum8']) && isset($_POST['inputNum9']) && isset($_POST['inputNum10']) && isset($_POST['inlineRadioOptions'])) {
    if ($_POST['inlineRadioOptions'] == "Overwrite") {
        $fh = fopen($myFile, 'w');
    } else {
        $fh = fopen($myFile, 'a');
    }
    for ($x = 1; $x <= 10; $x++) {
        fwrite($fh, $_POST{'inputNum' . $x} . "\n");
    }
    fclose($fh);
    echo "<script>alert('Uploaded Successfully!'); window.location.href = '../index.php';</script>";
    exit();
}
?>