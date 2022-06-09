<?php
function printHead() {
    echo __FUNCTION__ . "<br>";
    echo "<html><head></head></html>";
}

function printFooter() {
    echo __FUNCTION__ . "<br>";
    echo "<footer></footer>";
}


function getFileData(string $fileAddress) {
    return file_get_contents($fileAddress);
}

function writeDataToFile($fileAddress, array $data = [] ) {
    return file_put_contents($fileAddress,$data);
}
