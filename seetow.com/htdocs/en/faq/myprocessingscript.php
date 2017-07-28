<!doctype html><html><head>
<?php
$t = time();
$date = date('d/n/Y H:i:s', $t);

if(isset($_POST['field1'])) {
    $data = $_POST['field1'] . '-' . $_POST['field2'] . $date . "\n";
    $ret = file_put_contents('logs/input.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file";
    }
}
else {
   die('no post data to process');
}
?>
    <meta http-equiv="refresh" content="0;URL='https://seetow.com/en/faq/success'" />    </head></html>
